<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\PlanPurchase;
use App\Models\ReferralHistory;
use App\Models\LevelBonusIncome;
use App\Models\LevelBonusHistory;

class PlanPurchaseController extends Controller
{

    public function index()
    {
        $purchases = PlanPurchase::with('user')->get(); // fetch purchases with users
        $user = Auth::user();


        return view('user.plans', compact('purchases', 'users'));
    }

    /**
     * Activate a plan for a user (admin/manual activation)
     */
    public function activate(Request $request, $id)
    {
        // Find user
        $user = Auth::user();

        // Use the selected plan amount from request
        $purchase = PlanPurchase::create([
            'user_id'      => $user->id,
            'plan_amount'  => $request->plan_amount,
            'status'       => 'active',
            'purchased_at' => now(),
        ]);

        // Distribute bonuses
        $this->distributeLevelBonus($user, $request->plan_amount);

        return redirect()->back()->with('success', 'Plan activated and bonuses distributed!');
    }

    /**
     * Normal plan purchase (by user)
     */
    public function store(Request $request)
    {
        $request->validate([
            'plan_amount'   => 'required|numeric|min:1',
            'referral_code' => 'nullable|string|max:255'
        ]);

        $buyer = Auth::user();

        // Create purchase
        $purchase = PlanPurchase::create([
            'user_id'      =>  Auth::id(),
            'plan_amount'  => $request->plan_amount,
            'status'       => 'active',
            'purchased_at' => now(),
        ]);

        // Direct referral commission
        if (!empty($request->referral_code)) {
            $referrer = User::where('refcode', $buyer->referral_by)->first();

            if ($referrer && $referrer->id !== $buyer->id) {
                $commission = $request->plan_amount * 0.10; // 10%
                $referrer->increment('referral_wallet', $commission);

                ReferralHistory::create([
                    'from_user_id'      => $buyer->id,
                    'to_user_id'        => $referrer->id,
                    'to_user_refcode'   => $referrer->refcode,
                    'commission_amount' => $commission,
                    'status'            => 'paid',
                    'credited_at'       => now(),
                ]);
            }
        }

        // Team bonus
        $this->distributeLevelBonus($buyer, $request->plan_amount);

        return response()->json([
            'success' => true,
            'message' => 'Plan purchased successfully!',
            'data'    => $purchase
        ]);
    }

    /**
     * Team bonus distribution
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
            11 => ['percent' => 1, 'direct_required' => 0],
            12 => ['percent' => 1, 'direct_required' => 0],
            13 => ['percent' => 1, 'direct_required' => 0],
            14 => ['percent' => 1, 'direct_required' => 0],
            15 => ['percent' => 1, 'direct_required' => 0],
        ];

        $parent = User::where('refcode', $user->referral_by)->first();
        $level = 1;

        while ($parent && $level <= 15) {
            $rule        = $bonusRules[$level];
            $bonusAmount = ($planAmount * $rule['percent']) / 100;

            $directs  = User::where('referral_by', $parent->refcode)->count();
            $eligible = $directs >= $rule['direct_required'];

            if ($eligible) {
                $parent->increment('staking_wallet', $bonusAmount);
            }

            //  Insert into level_bonus_incomes (old table)
            LevelBonusIncome::create([
                'user_id'      => $parent->id,
                'from_user_id' => $user->id,
                'level'        => $level,
                'percent'      => $rule['percent'],
                'amount'       => $bonusAmount,
                'status'       => $eligible ? 'paid' : 'laps',
                'remark'       => "Level {$level} income from user #{$user->id}",
            ]);

            //  Insert into level_bonus_histories (new table)
            LevelBonusHistory::create([
                'from_user_id' => $user->id,
                'to_user_id'   => $parent->id,
                'level'        => $level,
                'percent'      => $rule['percent'],
                'bonus_amount' => $bonusAmount,
                'status'       => $eligible ? 'paid' : 'laps',
                'credited_at'  => now(),
            ]);

            $parent = User::where('refcode', $parent->referral_by)->first();
            $level++;
        }
    }
}
