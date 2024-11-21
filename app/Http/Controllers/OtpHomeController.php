<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Otpform;
use App\Models\Verifytoken;
use Illuminate\Http\Request;

class OtpHomeController extends Controller
{
    public function index(){
        //return view('/otpform');
        $get_user = Otpform::where('email', auth()->user()->email)->first();
        if($get_user->is_activated == 1){
            return view('/otphome');
        }
        else{
            return redirect('verify-account');
        }
    }

    public function verifyaccount(){
        return view('/opt_verification');
    }

    public function useractivation(Request $request){
        $get_token = $request->token;
        $get_token = Verifytoken::where('token', $get_token)->first();
        
        if($get_token){
            $get_token->is_activated = 1;
            $get_token->save();

            $user = Otpform::where('email', $get_token->email)->first();
            $user->is_activated = 1;
            $user->save();

            $getting_token = Verifytoken::where('token', $get_token->token)->first();
            $getting_token->delete();
            return redirect('/otphome')->with('activated', 'Your Otp code has been Verified !');
        }
        else{
            return redirect('/verify-account')->with('Incorrect', 'Your Otp is incorrect, please check your Code Again!!');
        }
    }
}
