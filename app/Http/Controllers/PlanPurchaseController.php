<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlanPurchase;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ReferralHistory;
use App\Models\LevelBonusIncome;

class PlanPurchaseController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'plan_amount'   => 'required|numeric|min:1',
            'referral_code' => 'nullable|string|max:255'
        ]);

        // Create the purchase
        $purchase = PlanPurchase::create([
            'user_id'      => Auth::id(),
            'plan_amount'  => $request->plan_amount,
            'status'       => 'pending',
            'purchased_at' => now(),
        ]);

        // Buyer
        $buyer = Auth::user();

        // 🔹 Referral logic (direct referral commission)
        if (!empty($request->referral_code)) {
            $referrer = User::where('refcode', $buyer->referral_by)->first();

            if ($referrer && $referrer->id !== $buyer->id) {
                $commission = $request->plan_amount * 0.10; // 10%

                // update referral_wallet balance
                $referrer->increment('referral_wallet', $commission);

                // store referral history
                ReferralHistory::create([
                    'from_user_id'     => $buyer->id,
                    'to_user_id'       => $referrer->id,
                    'to_user_refcode'  => $referrer->refcode,
                    'commission_amount' => $commission,
                    'status'           => 'paid',
                    'credited_at'      => now(),
                ]);
            }
        }

        // 🔹 Distribute Level Staking Bonus
        $this->distributeLevelBonus($buyer, $request->plan_amount);

        return response()->json([
            'success' => true,
            'message' => 'Plan purchased successfully!',
            'data'    => $purchase
        ]);
    }

    /**
     * Handle Team Staking Bonus (15 Levels)
     */
    protected function distributeLevelBonus(User $user, $planAmount)
    {
        $bonusRules = [
            1 => ['percent' => 30, 'direct_required' => 1],
            2 => ['percent' => 20, 'direct_required' => 2],
            3 => ['percent' => 10, 'direct_required' => 3],
            4 => ['percent' => 10, 'direct_required' => 4],
            5 => ['percent' => 5,  'direct_required' => 5],
            6 => ['percent' => 4,  'direct_required' => 6],
            7 => ['percent' => 4,  'direct_required' => 7],
            8 => ['percent' => 4,  'direct_required' => 8],
            9 => ['percent' => 4,  'direct_required' => 9],
            10 => ['percent' => 4, 'direct_required' => 10],
            11 => ['percent' => 1, 'direct_required' => 11],
            12 => ['percent' => 1, 'direct_required' => 12],
            13 => ['percent' => 1, 'direct_required' => 13],
            14 => ['percent' => 1, 'direct_required' => 14],
            15 => ['percent' => 1, 'direct_required' => 15],
        ];

        $parent = User::where('refcode', $user->referral_by)->first();
        $level = 1;

        while ($parent && $level <= 15) {
            $rule = $bonusRules[$level];
            $bonusAmount = ($planAmount * $rule['percent']) / 100;

            // eligibility check (direct referrals required)
            $directs = User::where('referral_by', $parent->refcode)->count();
            $eligible = $directs >= $rule['direct_required'];

            if ($eligible) {
                // Credit staking wallet
                $parent->increment('staking_wallet', $bonusAmount);
            }

            // Income record (paid / laps)
            LevelBonusIncome::create([
                'user_id'      => $parent->id,
                'from_user_id' => $user->id,
                'level'        => $level,
                'percent'      => $rule['percent'],
                'amount'       => $bonusAmount,
                'status'       => $eligible ? 'paid' : 'laps',
                'remark'       => "Level {$level} income from user #{$user->id}",
            ]);

            // Go one level up
            $parent = User::where('refcode', $parent->referral_by)->first();
            $level++;
        }
    }
}
