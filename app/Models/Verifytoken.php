<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verifytoken extends Model
{
    use HasFactory;

    protected $fillable = [
        'token',
        'email',
        'is_activated'
    ];

    protected $primaryKey = 'User_Id';

    public $incrementing = false;

    protected $keyType = 'string';
}
