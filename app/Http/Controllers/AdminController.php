<?php

namespace App\Http\Controllers;

use App\Models\User; // Import the User model for database interactions related to the users table.
use Illuminate\Http\Request; // Import Request to handle HTTP requests.
use App\Models\Transaction; // Import the Transaction model (though it isn't used in this code).
use DB; // Import the DB facade for database queries (not used in this specific controller).

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

        // Get the currently authenticated user using Laravel's auth helper.
        $userdata = auth()->user();

        // Pass the retrieved data to the 'page.user-profile' view.
        return view('page.user-profile', compact('admins', 'users', 'userlists', 'userdata'));
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

        public function dataupdate(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255',
            'Middle_Name' => 'nullable|string|max:255',
            'Last_Name' => 'required|string|max:255',
            'Birth_Date' => 'required|date',
            'Mobile_Number' => 'required|string|max:15',
            'email' => 'required|email|unique:users,email,' . auth()->user()->User_Id . ',User_Id',  // Corrected: use User_Id
        ]);

        // Retrieve the current user's data
        $dataupdate = auth()->user(); // Using $dataupdate instead of $user

        // Update the user's data
        $dataupdate->name = $request->name;
        $dataupdate->Middle_Name = $request->Middle_Name;
        $dataupdate->Last_Name = $request->Last_Name;
        $dataupdate->Birth_Date = $request->Birth_Date;
        $dataupdate->Mobile_Number = $request->Mobile_Number;
        $dataupdate->email = $request->email;

        // Save the updated user information
        $dataupdate->save();

        // Redirect or return a response
        return redirect()->route('user.profile')->with('success', 'Profile updated successfully!');
    }

}
