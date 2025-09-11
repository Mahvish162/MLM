<?php



namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\PlanPurchase;
use App\Models\ReferralHistory;
use App\Models\StakingHistory;
use App\Models\LevelBonusIncome;

class UserController extends Controller
{

    public function dashboard()
    {
        return view('user.dashboard'); 
    }

    public function plans()
    {
        $purchases = PlanPurchase::with('user')
            ->orderBy('purchased_at', 'desc')
            ->get();
        return view('user.plans',compact('purchases')); 
    }

    public function withdraw()
    {
        return view('user.withdraw'); 
    }
    public function profile()
    {
        return view('user.profile'); 
    }

    public function referralHistory()
    {
        $referrals = ReferralHistory::with(['fromUser', 'toUser'])
            ->where('from_user_id', Auth::id()) // show only current user's history
            ->latest()
            ->get();

        return view('user.referral-history', compact('referrals'));
    }

    public function daily_staking_bonus()
    {
        // get only logged in user’s staking history
        $histories = StakingHistory::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('user.staking-history', compact('histories'));
    }
    public function daily_team_staking_bonus()
    {
        $incomes = LevelBonusIncome::with('fromUser')
            ->where('user_id', Auth::id())
            ->orderByDesc('created_at')
            ->paginate(15); // for pagination

        return view('user.level_bonus', compact('incomes'));
    }
    public function logout(Request $request)
    {
       Auth::logout();// log the user out

        return redirect('/login'); // redirect to login page
    }

    public function checkReferral(Request $request)
    {
        $user = User::where('refcode', $request->code)->first();

        if ($user) {
            return response()->json([
                'success' => true,
                'name' => $user->name,
            ]);
        }

        return response()->json([
            'success' => false
        ]);
    }

}
