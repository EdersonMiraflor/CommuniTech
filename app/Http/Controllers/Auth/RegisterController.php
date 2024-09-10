<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'Middle_Name' => ['nullable', 'string', 'max:255'],
            'Last_Name' => ['required', 'string', 'max:255'],
            'Birth_Date' => ['required', 'date'],
            'Sex' => ['required', 'in:male,female'],
            'Mobile_Number' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'], 
            'Address' => ['nullable', 'string', 'max:255'],
            'Credential' => ['required', 'in:user,admin'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'Middle_Name' => $data['Middle_Name'],
            'Last_Name' => $data['Last_Name'],
            'Birth_Date' => $data['Birth_Date'],
            'Sex' => $data['Sex'],
            'Mobile_Number' => $data['Mobile_Number'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'password_confirmation' => ['required', 'string', 'same:password'],
            'Address' => $data['Address'],
            'Credential' => $data['Credential'],
        ]);
    }    
}
