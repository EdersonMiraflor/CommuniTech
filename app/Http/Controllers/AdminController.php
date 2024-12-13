<?php

namespace App\Http\Controllers;

use App\Models\Paymentrecord;
use App\Models\User; // Import the User model for database interactions related to the users table.
use Illuminate\Http\Request; // Import Request to handle HTTP requests.

class AdminController extends Controller
{
    /**
     * Display the user profile page with a list of admins, users, and authenticated user details.
     *
     * @return \Illuminate\View\View
     */
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

        $records = Paymentrecord::select('name', 'requested_certificate', 'quantity', 'proof')->get();

        // Get the currently authenticated user using Laravel's auth helper.
        $userdata = auth()->user();

        // Pass the retrieved data to the 'page.user-profile' view.
        return view('page.user-profile', compact('admins', 'users', 'userlists', 'riderlists', 'userdata', 'records'));
    }

    /**
     * Change the credential of a specific user (e.g., from user to admin or vice versa).
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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
            return redirect()->back()->with('success', 'User credential updated successfully.');
        }

        // If the save operation fails, redirect back with an error message.
        return redirect()->back()->with('error', 'Failed to update user credential.');
    }

    /**
     * Display the profile page of the authenticated user.
     * 
     * This method is similar to `userProfile`, but only handles the currently logged-in user's data.
     *
     * @return \Illuminate\View\View
     */
    public function showUserProfile()
    {
        // Get the currently authenticated user using Laravel's auth helper.
        $userdata = auth()->user();

        // Pass the authenticated user data to the 'page.user-profile' view.
        return view('page.user-profile', compact('userdata'));
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
                return redirect()->back()->with('success', 'User credential updated successfully.');
            }
            return redirect()->back()->with('error', 'Failed to update user credential.');
    }
/*Rider End*/
    public function dataupdate(Request $request)
    {
        // Validate the input data (including password confirmation)
        $request->validate([
            'name' => 'required|string|max:255',
            'Middle_Name' => 'nullable|string|max:255',
            'Last_Name' => 'required|string|max:255',
            'Birth_Date' => 'required|date',
            'Mobile_Number' => 'required|string|max:15',
            'email' => 'required|email|unique:users,email,' . auth()->user()->User_Id . ',User_Id',
            'password' => 'nullable|string|min:8|confirmed', // Confirmed ensures password matches password_confirmation
        ], [
             'password.confirmed' => 'Your password input does not matched, please try editing it again!'
        ]);
    
        // Retrieve the current user's data
        $dataupdate = auth()->user();
    
        // Update user data (excluding password initially)
        $dataupdate->name = $request->name;
        $dataupdate->Middle_Name = $request->Middle_Name;
        $dataupdate->Last_Name = $request->Last_Name;
        $dataupdate->Birth_Date = $request->Birth_Date;
        $dataupdate->Mobile_Number = $request->Mobile_Number;
        $dataupdate->email = $request->email;
    
        // Check if password field is filled
        if ($request->filled('password')) {
            // Update password if it's valid (confirmed validation ensures matching)
            $dataupdate->password = bcrypt($request->password);
        }
    
        // Save updated user data
        $dataupdate->save();
    
        // Redirect to profile page with success message
        return redirect()->route('user.profile')->with('success', 'Profile updated successfully!');
    }

}
