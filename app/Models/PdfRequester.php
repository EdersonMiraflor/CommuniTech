<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PdfRequester extends Model
{
    use HasFactory;
    protected $table = 'PdfRequesters'; 
    protected $primaryKey = 'req_no';
    protected $fillable = [
        'User_Id',
        'certificate_type',
    ];
}
