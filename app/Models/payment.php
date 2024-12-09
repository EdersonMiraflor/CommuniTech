<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
      // Table name
      protected $table = 'payments';

      // Fillable fields
      protected $fillable = [
          'User_Id',
          'name',
          'requested_certificate',
          'quantity',
          'address',
          'barangay',
          'proof_of_payment',
          'qrcode', 
      ];
      protected $primaryKey = 'Payment_Id'; // Specify your primary key
      public $incrementing = true; // Set to false if `Payment_Id` is not auto-incrementing
      protected $keyType = 'int'; // Use 'string' if `Payment_Id` is not an integer
}
