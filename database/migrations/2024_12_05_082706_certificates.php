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
    
            // Child's Information
            $table->string('child_first_name');
            $table->string('child_middle_name')->nullable();
            $table->string('child_last_name');
            $table->string('child_sex');
            $table->date('child_date_of_birth');
            $table->string('child_place_of_birth');
    
            // Mother's Information
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
            $table->id(); // Primary key
            
            // Bride's Information
            $table->string('bride_full_name');
            $table->string('bride_place_of_birth');
            $table->date('bride_date_of_birth');
            $table->string('bride_residence');

            // Groom's Information
            $table->string('groom_full_name');
            $table->string('groom_place_of_birth');
            $table->date('groom_date_of_birth');
            $table->string('groom_residence');

            // Marriage Details
            $table->date('date_of_marriage');
            $table->string('place_of_marriage');
            $table->string('officiant_name');

            // Timestamps
            $table->timestamps(); // Includes created_at and updated_at
        });

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
