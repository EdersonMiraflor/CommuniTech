<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    // Specify the table name if it differs from the pluralized model name
    protected $table = 'transactions'; // Uncomment if your table name is not pluralized
    // Define the primary key if it's not 'id'
    protected $primaryKey = 'Transaction_Id'; // Assuming 'Transaction_Id' is your primary key
    // Disable timestamps if you don't have 'created_at' and 'updated_at' fields
    public $timestamps = true; // Set to false if you are not using timestamps
    // Define the fillable fields (mass assignment)
    protected $fillable = [
        'User_Id',
        'Certificate_Id',
        'Submitted_Date',
        'Pick_Up_Date',
        'Cert_Type',
        'Quantity',
        'Request_Id',
        'Status',
        'progress',
    ];
    // Define any relationships if necessary (e.g., if you have user and certificate models)
    public function user()
    {
        return $this->belongsTo(User::class, 'User_Id');
    }
    public function certificate()
    {
        return $this->belongsTo(Certificate::class, 'Certificate_Id');
    }
}
