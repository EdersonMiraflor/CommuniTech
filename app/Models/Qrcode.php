<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qrcode extends Model
{
    use HasFactory;
    protected $table = 'qrcode';
    protected $primaryKey = 'Attemp_Id';
    public $incrementing = false;
    protected $fillable = [
        'User_Id',
        'photo'
    ]; 
}
