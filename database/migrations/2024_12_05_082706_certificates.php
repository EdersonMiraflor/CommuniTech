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

            // Child's Details
            $table->string('child_first', 100);
            $table->string('child_middle', 100)->nullable();
            $table->string('child_last', 100);
            $table->enum('child_sex', ['Male', 'Female']);
            $table->date('child_birthdate');
            $table->string('child_birthplace', 255);
            $table->enum('multiple_birth', ['Single', 'Twin', 'Triplets', 'Other'])->default('Single');
            $table->string('birth_type', 100)->nullable();
            $table->integer('birth_order')->nullable();
            $table->float('birth_weight', 8, 2)->nullable();

            // Mother's Details
            $table->string('mother_first_name', 100);
            $table->string('mother_middle_name', 100)->nullable();
            $table->string('mother_last_name', 100);
            $table->string('citizenship', 100)->nullable();
            $table->string('religion', 100)->nullable();
            $table->integer('total_number')->nullable(); // Total number of children
            $table->integer('children')->nullable(); // Number of living children
            $table->integer('dead_child')->nullable(); // Number of deceased children
            $table->string('occupation', 100)->nullable();
            $table->integer('mother_age')->nullable();
            $table->string('mother_street', 255)->nullable();
            $table->string('mother_city', 100)->nullable();
            $table->string('mother_province', 100)->nullable();
            $table->string('mother_country', 100)->nullable();

            // Father's Details
            $table->string('father_first_name', 100);
            $table->string('father_middle_name', 100)->nullable();
            $table->string('father_last_name', 100);
            $table->string('citizenship2', 100)->nullable();
            $table->string('religion2', 100)->nullable();
            $table->string('occupation2', 100)->nullable();
            $table->integer('father_age')->nullable();
            $table->string('father_street', 255)->nullable();
            $table->string('father_city', 100)->nullable();
            $table->string('father_province', 100)->nullable();
            $table->string('father_country', 100)->nullable();

            // Marriage Details
            $table->date('marriage_date')->nullable();
            $table->string('marriage_street', 255)->nullable();
            $table->string('marriage_municipality', 100)->nullable();
            $table->string('marriage_province', 100)->nullable();
            $table->string('marriage_country', 100)->nullable();

            // Attendant Details
            $table->enum('attendant_role', ['Physician', 'Nurse', 'Midwife', 'Hilot', 'Other'])->nullable();
            $table->string('other_attendant_role', 100)->nullable(); // Specify if "Other"

            // Miscellaneous
            $table->string('father_name', 100)->nullable();
            $table->string('mother_name', 100)->nullable();
            $table->string('name_child', 100)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('birth_place', 255)->nullable();
            $table->string('signature1', 255)->nullable();
            $table->string('signature2', 255)->nullable();

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
