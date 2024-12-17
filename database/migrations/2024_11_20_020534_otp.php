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
        Schema::create('otpform', function (Blueprint $table) {
            $table->id('User_Id'); // Primary key column
            $table->string('name');
            $table->string('email');
            $table->boolean('is_activated')->default(0);
            $table->timestamps();

            // Adding foreign key reference to 'users' table
            $table->foreign('User_Id')->references('User_Id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('otpform');
    }
};
