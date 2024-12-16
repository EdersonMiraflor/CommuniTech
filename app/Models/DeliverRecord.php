<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliverRecord extends Model
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
        'status'
    ];
    
}
