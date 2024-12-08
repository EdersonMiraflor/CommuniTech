<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id('User_Id'); 
            $table->string('name'); 
            $table->string('requested_certificate'); 
            $table->integer('quantity');
            $table->string('address'); 
            
            // Restrict Barangay to specific options using enum
            $table->enum('barangay', [
                'Cabacongan', 'Cawayan', 'Malobago', 'Tinapian', 'Manumbalay',
                'Buyo', 'IT-Ba', 'Cawit', 'Balasbas', 'Bamban', 'Pawa',
                'Hulugan', 'Balabagon', 'Cabit', 'Nagotgot', 'Inang Maharang'
            ]);

            // Proof of payment will store the file path or name
            $table->string('proof_of_payment')->nullable();

            $table->timestamps(); // Created at and Updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
