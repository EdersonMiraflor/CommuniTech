<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $table = 'Payment';
    protected $primaryKey = 'Payment_Id';
    public $incrementing = false;
    protected $fillable = [
        'name',
        'requested_certificate',
        'quantity',
        'address',
        'mobile', 
        'barangay',
        'proof', 
        'photo'
    ]; 
}
