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
        Schema::create('birth_registrations', function (Blueprint $table) {
            $table->id();
            // Child details
            $table->string('child_first_name');
            $table->string('child_last_name');
            $table->date('child_dob');
            $table->string('child_place_of_birth');
            
            // Mother details
            $table->string('mother_first_name');
            $table->string('mother_last_name');
            $table->date('mother_dob');
            $table->string('mother_citizenship');
            
            // Father details
            $table->string('father_first_name');
            $table->string('father_last_name');
            $table->date('father_dob');
            $table->string('father_citizenship');
            
            // Informant details
            $table->string('informant_name');
            $table->string('informant_relationship');
            $table->string('informant_address');
            $table->date('informant_date_signed');
            
            // Attendant details
            $table->string('attendant_name');
            $table->date('attendant_date_signed');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('birth_registrations');
    }
};
