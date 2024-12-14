<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class AutoAddSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    /*Automatic add a admin user*/
    public function run(): void
    {
        DB::table('users')->insert([
            'Credential' => 'admin', 
            'name' => 'CommuniTech4', 
            'Middle_Name' => 'Manito', 
            'Last_Name' => 'Civilregistar', 
            'Birth_Date' => '2024-12-26', 
            'Sex' => 'male', 
            'Mobile_Number' => '09092902988',
            'email' => 'communitech04@gmail.com', 
            'password' => Hash::make('communitech4'), 
            'Address' => 'Manito, Philippines', 
            'Request_Id' => null, 
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

           // Insert test user
           DB::table('users')->insert([
            'Credential' => 'user', 
            'name' => 'test', 
            'Middle_Name' => 'Random', 
            'Last_Name' => 'User', 
            'Birth_Date' => '2000-01-01', 
            'Sex' => 'female', 
            'Mobile_Number' => '09123456789',
            'email' => 'test@gmail.com', 
            'password' => Hash::make('12345678'), 
            'Address' => 'Test Address, City', 
            'Request_Id' => null, 
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

           // Insert test user
           DB::table('users')->insert([
            'Credential' => 'rider', 
            'name' => 'bob', 
            'Middle_Name' => 'stylish', 
            'Last_Name' => 'motor', 
            'Birth_Date' => '2020-01-01', 
            'Sex' => 'male', 
            'Mobile_Number' => '09123446089',
            'email' => 'rider@gmail.com', 
            'password' => Hash::make('12345678'), 
            'Address' => 'Rider Address, City', 
            'Request_Id' => null, 
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
