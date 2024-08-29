<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
//User the table user_account, and any input from the view will be put by controller in the model value
    protected $table = 'user_account';
    protected $fillable = [
        'id', 
        'last_name', 
        'first_name', 
        'middle_name',
        'extension_name', 
        'month', 
        'year', 
        'day', 
        'sex', 
        'mobile_number', 
        'email_address',
        'password', 
        'house_no', 
        'zone', 
        'barangay'
    ];
}
