<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paymentrecord extends Model
{
    use HasFactory;
    protected $table = 'paymentrecord';
    protected $primaryKey = 'Payment_Id';
    protected $fillable = [
        'User_Id',
        'name',
        'requested_certificate',
        'quantity',
        'address',
        'mobile',
        'barangay',
        'proof',
        'status',
    ];
}
