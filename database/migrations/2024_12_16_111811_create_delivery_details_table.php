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
            // Explicitly specify the column to reference in the 'users' table.
            $table->unsignedBigInteger('User_Id')->nullable();
            $table->string('rider');
            $table->string('rider_number');
            $table->date('estimated_delivery_day');
            $table->string('name');
            $table->string('requested_certificate');
            $table->integer('quantity');
            $table->string('address');
            $table->string('mobile');
            $table->string('barangay');
            $table->enum('status', ['pending', 'completed', 'cancelled'])->default('pending');
            $table->timestamps();

            // Define the foreign key constraint explicitly
            $table->foreign('User_Id')->references('User_Id')->on('users')->onDelete('cascade');
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
