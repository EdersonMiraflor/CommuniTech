<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingDelivery extends Model
{
    use HasFactory;
    protected $table = 'paymentrecord';

    protected $fillable = [
        'User_Id',
        'name',
        'estimated_delivery_day',
        'requested_certificate',
        'email',
        'quantity',
        'address',
        'mobile',
        'barangay',
        'proof',
        'status',
    ];
}
