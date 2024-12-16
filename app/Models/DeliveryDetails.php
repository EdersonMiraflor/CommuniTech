<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryDetails extends Model
{
    use HasFactory;
    protected $table = 'delivery_details'; // Explicitly set the table name
    protected $primaryKey = 'Detail_Id';
    protected $fillable = [
        'User_Id',
        'rider',
        'name',
        'requested_certificate',
        'quantity',
        'address',
        'mobile',
        'barangay',
        'status',
    ];
}
