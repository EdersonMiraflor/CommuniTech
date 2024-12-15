<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qrcode extends Model
{
    use HasFactory;

    // No need to specify the primary key and incrementing flag if you're using auto-increment
    protected $table = 'qrcode';

    // This will automatically handle the primary key and increments
    protected $fillable = ['photo'];
}

