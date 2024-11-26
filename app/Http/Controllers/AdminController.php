<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function userProfile(){
        $admins = User::where('Credential', 'admin')->get();
        $users = User::where('Credential', 'user')->get();
    
        return view('page.user-profile', compact('admins', 'users'));
    }
    
}
