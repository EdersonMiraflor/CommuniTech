<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otpform extends Model
{
    use HasFactory;

    protected $table = 'otpform';
    protected $fillable = [
        'name',
        'email',
        'is_activated'
    ];
    protected $primaryKey = 'User_Id';

    public $incrementing = false;

    protected $keyType = 'string';
}
