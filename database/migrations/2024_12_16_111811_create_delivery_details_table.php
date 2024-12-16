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
        Schema::create('delivery_details', function (Blueprint $table) {
            $table->id('Detail_Id');
            // Assuming the 'users' table has an 'id' column for the primary key.
            $table->foreignId('User_Id')->constrained('users', 'User_Id'); // Make sure it references the correct column ('id')
            $table->string('rider');
            $table->date('estimated_delivery_day');
            $table->string('name');
            $table->string('requested_certificate');
            $table->integer('quantity');
            $table->string('address');
            $table->string('mobile');
            $table->string('barangay');
            $table->enum('status', ['pending', 'completed', 'cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_details');
    }
};
