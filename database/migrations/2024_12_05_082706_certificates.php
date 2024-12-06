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
            $table->string('child_first_name');
            $table->string('child_middle_name')->nullable();
            $table->string('child_last_name');
            $table->string('child_sex');
            $table->date('child_date_of_birth');
            $table->string('child_place_of_birth');
            $table->string('mother_first_name');
            $table->string('mother_middle_name')->nullable();
            $table->string('mother_last_name');
            $table->date('mother_date_of_birth');
            $table->string('mother_citizenship');
            $table->string('mother_religion')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_residence');
    
            $table->timestamps();
        });

        Schema::create('marriage_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('bride_full_name');
            $table->string('bride_place_of_birth');
            $table->date('bride_date_of_birth');
            $table->string('bride_residence');  
            $table->string('groom_full_name');
            $table->string('groom_place_of_birth');
            $table->date('groom_date_of_birth');
            $table->string('groom_residence');
            $table->date('date_of_marriage');
            $table->string('place_of_marriage');
            $table->string('officiant_name');
            $table->timestamps(); 
        });

        Schema::create('death_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('deceased_name');
            $table->enum('deceased_sex', ['Male', 'Female']);
            $table->date('deceased_dob'); 
            $table->string('deceased_birthplace');
            $table->date('death_date'); 
            $table->time('death_time')->nullable(); 
            $table->string('death_place');
            $table->text('cause_of_death');
            $table->string('informant_name');
            $table->string('informant_relationship');
            $table->string('informant_address');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('birth_registrations');
        Schema::dropIfExists('marriage_certificates');
        Schema::dropIfExists('death_registrations');
    }
};
