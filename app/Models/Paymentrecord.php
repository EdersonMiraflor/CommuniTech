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
        'email',
        'quantity',
        'address',
        'mobile',
        'barangay',
        'proof',
        'status',
    ];
    // Define the relationship to the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'User_Id', 'User_Id');
    }
}
