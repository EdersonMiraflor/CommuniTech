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
        // Existing Admin User
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

        // New Admin Users
        DB::table('users')->insert([
            'Credential' => 'admin', 
            'name' => 'AdminUser1', 
            'Middle_Name' => 'Middle1', 
            'Last_Name' => 'Admin', 
            'Birth_Date' => '1990-05-15', 
            'Sex' => 'female', 
            'Mobile_Number' => '09012345678',
            'email' => 'admin1@example.com', 
            'password' => Hash::make('admin1234'), 
            'Address' => 'Address 1, City', 
            'Request_Id' => null, 
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'Credential' => 'admin', 
            'name' => 'AdminUser2', 
            'Middle_Name' => 'Middle2', 
            'Last_Name' => 'Admin', 
            'Birth_Date' => '1985-11-20', 
            'Sex' => 'male', 
            'Mobile_Number' => '09023456789',
            'email' => 'admin2@example.com', 
            'password' => Hash::make('admin5678'), 
            'Address' => 'Address 2, City', 
            'Request_Id' => null, 
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Existing User
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

        // New User Users
        DB::table('users')->insert([
            'Credential' => 'user', 
            'name' => 'User1', 
            'Middle_Name' => 'Middle1', 
            'Last_Name' => 'Test', 
            'Birth_Date' => '1995-03-12', 
            'Sex' => 'male', 
            'Mobile_Number' => '09034567890',
            'email' => 'user1@example.com', 
            'password' => Hash::make('user1234'), 
            'Address' => 'User Address 1, City', 
            'Request_Id' => null, 
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'Credential' => 'user', 
            'name' => 'User2', 
            'Middle_Name' => 'Middle2', 
            'Last_Name' => 'Test', 
            'Birth_Date' => '1998-07-21', 
            'Sex' => 'female', 
            'Mobile_Number' => '09045678901',
            'email' => 'user2@example.com', 
            'password' => Hash::make('user5678'), 
            'Address' => 'User Address 2, City', 
            'Request_Id' => null, 
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Existing Rider User
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

        // New Rider Users
        DB::table('users')->insert([
            'Credential' => 'rider', 
            'name' => 'Rider1', 
            'Middle_Name' => 'Stylish', 
            'Last_Name' => 'Motor1', 
            'Birth_Date' => '1999-06-30', 
            'Sex' => 'female', 
            'Mobile_Number' => '09134567890',
            'email' => 'rider1@example.com', 
            'password' => Hash::make('rider1234'), 
            'Address' => 'Rider Address 1, City', 
            'Request_Id' => null, 
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'Credential' => 'rider', 
            'name' => 'Rider2', 
            'Middle_Name' => 'Fashion', 
            'Last_Name' => 'Motor2', 
            'Birth_Date' => '1997-09-15', 
            'Sex' => 'male', 
            'Mobile_Number' => '09145678901',
            'email' => 'rider2@example.com', 
            'password' => Hash::make('rider5678'), 
            'Address' => 'Rider Address 2, City', 
            'Request_Id' => null, 
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
