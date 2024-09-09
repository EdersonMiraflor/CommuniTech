<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
//User the table user_account, and any input from the view will be put by controller in the model value
protected $table = 'contact';

protected $fillable = [
    'User_Id',
    'First_Name',
    'Last_Name',
    'Email_Address',
    'Query'
];
}
