<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Transaction;
use DB;
class AdminController extends Controller
{
    public function userProfile()
{
        $admins = User::where('Credential', 'admin')->get();
        $users = User::where('Credential', 'user')->get();
        $userlists = User::whereIn('Credential', ['user', 'admin'])->get();

        return view('page.user-profile', compact('admins', 'users', 'userlists'));
    }

    public function changeCredential(Request $request)
    {
        // Validate the request data
        $request->validate([
            'user_id' => 'required|exists:users,User_Id',  // Ensure user_id exists
            'credential' => 'required|in:admin,user',     // Ensure the credential is either 'admin' or 'user'
        ]);

        // Retrieve the user based on User_Id from the form
        $user = User::where('User_Id', $request->user_id)->first();

        if (!$user) {
            // Return error if user not found
            return redirect()->back()->with('error', 'User not found!');
        }

        // Update the user's credential
        $user->Credential = $request->credential;

        if ($user->save()) {
            return redirect()->back()->with('success', 'User credential updated successfully.');
        }

        return redirect()->back()->with('error', 'Failed to update user credential.');
    }

    public function showUserProfile()
    {
        $userdata = auth()->user();

        // Return the view with user data
        return view('page.user-profile', compact('userdata'));
    }
}
