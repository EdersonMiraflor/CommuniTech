<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CredentialController extends Controller
{
    public function userProfile()
    {
        // Fetch all users with the 'admin' credential from the database.
        $admins = User::where('Credential', 'admin')->get();

        // Fetch all users with the 'user' credential from the database.
        $users = User::where('Credential', 'user')->get();

        // Fetch all users whose credentials are either 'admin' or 'user'.
        $userlists = User::whereIn('Credential', ['user', 'admin'])->get();

        // Fetch all users whose credentials are either 'rider' or 'user'
        $riderlists = User::whereIn('Credential', ['user', 'rider'])->get();

        // Get the currently authenticated user using Laravel's auth helper.
        $userdata = auth()->user();

        // Pass the retrieved data to the 'page.user-profile' view.
        return view('page.credential', compact('admins', 'users', 'userlists', 'riderlists'));
    }

    public function changeCredential(Request $request)
    {
        // Validate the incoming request:
        // 1. 'user_id' must exist in the users table.
        // 2. 'credential' must be either 'admin' or 'user'.
        $request->validate([
            'user_id' => 'required|exists:users,User_Id',  // Ensure the user_id exists in the users table.
            'credential' => 'required|in:admin,user',     // Ensure the credential is valid (admin or user).
        ]);

        // Retrieve the user based on the User_Id from the form input.
        $user = User::where('User_Id', $request->user_id)->first();

        // Check if the user was found.
        if (!$user) {
            // If the user does not exist, redirect back with an error message.
            return redirect()->back()->with('error', 'User not found!');
        }

        // Update the 'Credential' field of the user with the new value from the request.
        $user->Credential = $request->credential;

        // Save the updated user record to the database and check if the operation was successful.
        if ($user->save()) {
            // If the save operation is successful, redirect back with a success message.
            return redirect()->back()->with('success_change', 'Credential updated successfully.');
        }

        // If the save operation fails, redirect back with an error message.
        return redirect()->back()->with('fail_change', 'Failed to update credential.');
    }

    /*Rider Start*/
    public function changeRiderCredential(Request $request)
    { 
            $request->validate([
                'rider_id' => 'required|exists:users,User_Id',  
                'rider_credential' => 'required|in:rider,user',   
            ]);
    
            $user = User::where('User_Id', $request->rider_id)->first();
    
            if (!$user) {
                return redirect()->back()->with('error', 'User not found!');
            }

            $user->Credential = $request->rider_credential;
    
            if ($user->save()) {
                return redirect()->back()->with('success_change', 'Credential updated successfully.');
            }
            return redirect()->back()->with('fail_change', 'Failed to update credential.');
    }
}
