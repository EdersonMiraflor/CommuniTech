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
        Schema::create('Payment', function (Blueprint $table) {

            $table->id('Payment_Id'); 
            $table->unsignedBigInteger('User_Id')->nullable();
            $table->string('name'); 
            $table->string('requested_certificate'); 
            $table->integer('quantity');
            $table->string('address'); 
            $table->string('mobile', 11);
            // Restrict Barangay to specific options using enum
            $table->enum('barangay', [
                'Cabacongan', 'Cawayan', 'Malobago', 'Tinapian', 'Manumbalay',
                'Buyo', 'IT-Ba', 'Cawit', 'Balasbas', 'Bamban', 'Pawa',
                'Hulugan', 'Balabagon', 'Cabit', 'Nagotgot', 'Inang Maharang'
            ]);
            // Proof of payment will store the file path or name
            $table->string('proof')->nullable();
            $table->string('photo', 300)->nullable();
            
            $table->enum('status', ['pending', 'verified'])->default('pending');
            $table->timestamps(); // Created at and Updated at
            $table->foreign('User_Id')->references('User_Id')->on('users');
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
