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
          'name',
          'requested_certificate',
          'quantity',
          'address',
          'barangay',
          'proof_of_payment',
      ];
}
