<?php

namespace App\Services;

use App\Models\User;
use App\Models\PlanPurchase;
use App\Models\StakingHistory;
use Carbon\Carbon;

class StakingService
{
    public static function processDailyStaking()
    {
        $activePlans = PlanPurchase::where('status', 'active')->get();

        foreach ($activePlans as $plan) {
            $user = $plan->user;

            $percent = self::getDailyPercent($plan->plan_amount);
            $dailyAmount = ($plan->plan_amount * $percent) / 100;

            $totalCredited = StakingHistory::where('user_id', $user->id)
                ->where('plan_id', $plan->id) 
                ->sum('daily_amount');

            if ($totalCredited >= $plan->plan_amount) {
                $plan->update(['status' => 'completed']);
                continue;
            }

            if ($totalCredited + $dailyAmount > $plan->plan_amount) {
                $dailyAmount = $plan->plan_amount - $totalCredited;
            }

            // Create history
            StakingHistory::create([
                'user_id'       => $user->id,
                'plan_id'       => $plan->id,
                'plan_amount'   => $plan->plan_amount,
                'daily_amount'  => $dailyAmount,
                'total_credited'=> $totalCredited + $dailyAmount,
                'credited_at'   => Carbon::now(),
            ]);

            // Update wallet
            $user->increment('staking_wallet', $dailyAmount);
        }
    }

    private static function getDailyPercent($amount): float
    {
        return match (true) {
            $amount >= 10 && $amount <= 199   => 1,
            $amount >= 200 && $amount <= 499  => 1.5,
            $amount >= 500 && $amount <= 999  => 2,
            $amount >= 1000                   => 2.5,
            default                           => 0,
        };
    }
}
