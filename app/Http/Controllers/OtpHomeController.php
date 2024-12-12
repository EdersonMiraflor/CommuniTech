<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Otpform;
use App\Models\Verifytoken;
use Illuminate\Http\Request;

class OtpHomeController extends Controller
{
    public function index(){
        // Get the logged-in user's email
        $get_user = Otpform::where('email', auth()->user()->email)->first();
    
        // Check if the user record exists
        if (!$get_user) {
            return redirect()->back()->with('error', 'User not found. Please log in first.');
        }
    
        // Check if the user has already been activated
        if($get_user->is_activated == 1){
            return view('/otphome');
        }
        else{
            // Redirect to the verification page if the user is not activated
            return redirect('verify-account');
        }
    }
    
/*Sending OTP Code with OTP Form 5
Explanation: 
    -When  directed to verify-account it will do this function then return the user to op_verification page in the views
 */
    public function verifyaccount(){
        return view('/opt_verification');
    }
/*Sending OTP Code with OTP Form 8
Explanation: 
   -Once it direct to verifyotp, it will access the model Verifytoken and Otpform
   -It will check the table "is_activated" if its value is 1 or 0, if it is zero the user is required to insert the
   otp code, if it is 1 they can proceed to OtpHome Page
*/
public function useractivation(Request $request){
    $get_token = $request->token;
    $get_token = Verifytoken::where('token', $get_token)->first();
    
    if($get_token){
        // Check if the OTP belongs to the logged-in user
        if ($get_token->email !== auth()->user()->email) {
            return redirect('/verify-account')->with('error', 'This code belongs to another user.');
        }

        // Proceed with activation if the OTP is correct
        $get_token->is_activated = 1;
        $get_token->save();

        $user = Otpform::where('email', $get_token->email)->first();
        $user->is_activated = 1;
        $user->save();

        // Delete the token after successful verification
        $getting_token = Verifytoken::where('token', $get_token->token)->first();
        $getting_token->delete();

        return redirect('/otphome')->with('activated', 'Your OTP code has been verified!');
    }
    else{
        return redirect('/verify-account')->with('error', 'Your OTP is incorrect, please check your code again!');
    }
}

}
