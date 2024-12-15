<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $table = 'announcement';
    protected $primaryKey = 'Memo_id';
    public $incrementing = false;
    protected $fillable = [
        'User_Id',
        'announcement_title',
        'announcement_text'
    ]; 
}
