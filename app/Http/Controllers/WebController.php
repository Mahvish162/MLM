<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Carbon\Carbon;

class WebController extends Controller
{
    public function login()
    {
        return view('website.login'); // Make sure you have resources/views/login.blade.php
    }
    public function register()
    {
        return view('website.register'); // Make sure you have resources/views/login.blade.php
    }
      public function registerSubmit(Request $request)
    {
        $output = [
            'res' => 'error',
            'msg' => 'error',
            'data' => ''
        ];

        // Validation rules
        $validator = Validator::make($request->all(), [
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|unique:users,email',
            'password'    => 'required|min:6',
            'mobile_no'   => 'required|string|min:10|max:20',
            'referral_by' => 'required|string'
        ]);

        if ($validator->fails()) {
            $output['msg'] = $validator->errors()->first();
            return response()->json([$output], 422, [], JSON_UNESCAPED_UNICODE);
        }

        // Check referral code
        $refby = strtoupper($request->input('referral_by'));
        $refExists = User::where('refcode', $refby)->exists();
        if (!$refExists) {
            $output['msg'] = 'Invalid Referral Code!';
            return response()->json([$output], 200, [], JSON_UNESCAPED_UNICODE);
        }

        // Insert user
        $user = new User();
        $user->name               = $request->name;
        $user->email              = $request->email;
        $user->password           = Hash::make($request->password);
        $user->mobile_no          = $request->mobile_no;
        $user->referral_by        = $refby;
        $user->user_status        = 1;   // equivalent to 'red' → using int here
        $user->status             = 1;   // active
        $user->wallet             = 0.00;
        $user->laps_wallet        = 0.00;
        $user->staking_wallet     = 0.00;
        $user->referral_wallet    = 0.00;
        $user->level_wallet       = 0.00;
        $user->rank_wallet        = 0.00;
        $user->plan_purchase_status = 0;
        $user->delete_status      = 0;
        $user->country            = 'India';
        $user->level_name         = '0';

        if ($user->save()) {
            // Generate unique referral code
            $refcode = "DB" . $user->id . mt_rand(100, 999);
            $user->refcode = $refcode;
            $user->save();

            $output['res'] = 'success';
            $output['msg'] = 'Registered Successfully';
            $output['user_name'] = $user->name;
            $output['refcode']   = $user->refcode;
            $output['password']  = $request->password;
        } else {
            $output['msg'] = 'Failed To Register!';
        }

        return response()->json([$output], 200, [], JSON_UNESCAPED_UNICODE);
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
