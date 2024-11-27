<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function userProfile(){
        $admins = User::where('Credential', 'admin')->get();
        $users = User::where('Credential', 'user')->get();
        $user_credential = User::all(); // Or filter it if needed
        
        return view('page.user-profile', compact('admins', 'users', 'user_credential'));
    }

    public function changeCredential($User_Id)
    {
        // Retrieve the specific user by User_Id
        $user = User::where('User_Id', $User_Id)->first();
    
        if (!$user) {
            // Return error if user not found
            return redirect()->back()->with('error', 'User not found!');
        }
    
        // Determine the new credential
        $newCredential = $user->Credential === 'admin' ? 'user' : 'admin';
    
        // Update the user's credential and save it to the database
        $user->Credential = $newCredential;
    
        if ($user->save()) {
            return redirect()->back()->with('success', 'User credential updated successfully.');
        }
    
        return redirect()->back()->with('error', 'Failed to update user credential.');
    }
    


}
