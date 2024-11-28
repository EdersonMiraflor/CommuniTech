<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'riders';

    // The attributes that are mass assignable.
    protected $fillable = [
        'name',
        'email',
        'phone',
        'vehicle',
        'password',
    ];

    // The attributes that should be hidden for arrays.
    protected $hidden = [
        'password',
    ];
}
