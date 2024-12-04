<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('death_registrations', function (Blueprint $table) {
            $table->id();
            // Deceased Information
            $table->string('deceased_first_name');
            $table->string('deceased_middle_name')->nullable();
            $table->string('deceased_last_name');
            $table->string('deceased_suffix')->nullable();
            $table->enum('deceased_sex', ['Male', 'Female']);
            $table->date('deceased_dob'); // Date of Birth
            $table->string('deceased_birthplace');
            
            // Death Information
            $table->date('death_date'); // Date of Death
            $table->time('death_time')->nullable(); // Time of Death
            $table->string('death_place');
            $table->text('cause_of_death'); // Cause of Death
            
            // Informant Information
            $table->string('informant_name');
            $table->string('informant_relationship');
            $table->string('informant_address');
            $table->date('informant_date_signed'); // Date Signed by Informant
            
            // Timestamps
            $table->timestamps(); // created_at, updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('death_registrations');
    }
};
