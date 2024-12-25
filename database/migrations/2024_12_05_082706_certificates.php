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
            $table->id('Birth_Id');
            $table->string('user_name', 60)->nullable();

            $table->unsignedBigInteger('User_Id')->nullable();
            // Child's Details
            $table->string('child_first', 60);
            $table->string('child_middle', 60)->nullable();
            $table->string('child_last', 60);
            $table->enum('child_sex', ['Male', 'Female']);
            $table->date('child_birthdate');
            $table->string('child_birthplace', 60);
            $table->enum('multiple_birth', ['Single', 'Twin', 'Triplets', 'Other']);
            $table->string('birth_type', 60)->nullable();
            $table->integer('birth_order')->nullable();
            $table->float('birth_weight', 8, 2)->nullable();

            // Mother's Details
            $table->string('mother_first_name', 60);
            $table->string('mother_middle_name', 60)->nullable();
            $table->string('mother_last_name', 60);
            $table->string('citizenship', 60)->nullable();
            $table->string('religion', 60)->nullable();
            $table->integer('total_number')->nullable(); 
            $table->integer('children')->nullable(); 
            $table->integer('dead_child')->nullable();
            $table->string('occupation', 60)->nullable();
            $table->integer('mother_age')->nullable();
            $table->string('mother_street', 60)->nullable();
            $table->string('mother_street_input', 60)->nullable();
            $table->string('mother_city', 60)->nullable();
            $table->string('mother_province', 60)->nullable();
            $table->string('mother_country', 60)->nullable();

            // Father's Details
            $table->string('father_first_name', 60);
            $table->string('father_middle_name', 60)->nullable();
            $table->string('father_last_name', 60);
            $table->string('citizenship2', 60)->nullable();
            $table->string('religion2', 60)->nullable();
            $table->string('occupation2', 60)->nullable();
            $table->integer('father_age')->nullable();
            $table->string('father_street', 60)->nullable();
            $table->string('father_street_input', 60)->nullable();
            $table->string('father_city', 60)->nullable();
            $table->string('father_province', 60)->nullable();
            $table->string('father_country', 60)->nullable();

            // Marriage Details
            $table->date('marriage_date')->nullable();
            $table->string('marriage_street', 60)->nullable();
            $table->string('marriage_street_input', 60)->nullable();
            $table->string('marriage_municipality', 60)->nullable();
            $table->string('marriage_province', 60)->nullable();
            $table->string('marriage_country', 60)->nullable();

            // Attendant Details
            $table->enum('attendant_role', ['Physician', 'Nurse', 'Midwife', 'Hilot', 'Other'])->nullable();
            $table->string('other_attendant_role', 60)->nullable(); 
            $table->timestamps();
            $table->foreign('User_Id')->references('User_Id')->on('users');
        });

        Schema::create('marriage_registrations', function (Blueprint $table) {
            $table->id('Marriage_Id'); // Primary key (Auto-increment)
            $table->string('user_name', 60)->nullable();
            $table->unsignedBigInteger('User_Id')->nullable();
            // Husband's information
            $table->string('husband_first_name', 60)->nullable();
            $table->string('husband_middle_name', 60)->nullable();
            $table->string('husband_last_name', 60)->nullable();
            $table->date('husband_birthdate')->nullable(); // Fixed: date should not have a length
            $table->integer('husband_age')->nullable(); // Fixed: age should be an integer, no length needed
            $table->string('husband_city', 60)->nullable();
            $table->string('husband_city_input', 60)->nullable();
            $table->string('husband_province', 60)->nullable();
            $table->string('husband_province_input', 60)->nullable();
            $table->string('husband_country', 60)->nullable();
            $table->string('husband_country_input', 60)->nullable();
            $table->string('husband_citizenship', 60)->nullable();
            $table->string('husband_residence', 60)->nullable();
            $table->string('husband_religion', 60)->nullable();
            $table->string('husband_father_first_name', 60)->nullable();
            $table->string('husband_father_middle_name', 60)->nullable();
            $table->string('husband_father_last_name', 60)->nullable();
            $table->string('husband_father_citizenship', 60)->nullable();
            $table->string('husband_mother_first_name', 60)->nullable();
            $table->string('husband_mother_middle_name', 60)->nullable();
            $table->string('husband_mother_maiden_last_name', 60)->nullable();
            $table->string('husband_mother_citizenship', 60)->nullable();
            
            // Wife's information
            $table->string('wife_first_name', 60)->nullable();
            $table->string('wife_middle_name', 60)->nullable();
            $table->string('wife_last_name', 60)->nullable();
            $table->date('wife_birthdate')->nullable(); // Fixed: date should not have a length
            $table->integer('wife_age')->nullable(); // Fixed: age should be an integer, no length needed
            $table->string('wife_city', 60)->nullable();
            $table->string('wife_city_input', 60)->nullable();
            $table->string('wife_province', 60)->nullable();
            $table->string('wife_province_input', 60)->nullable();
            $table->string('wife_country', 60)->nullable();
            $table->string('wife_country_input', 60)->nullable();
            $table->string('wife_citizenship', 60)->nullable();
            $table->string('wife_residence', 60)->nullable();
            $table->string('wife_religion', 60)->nullable();
            $table->string('wife_father_first_name', 60)->nullable();
            $table->string('wife_father_middle_name', 60)->nullable();
            $table->string('wife_father_last_name', 60)->nullable();
            $table->string('wife_father_citizenship', 60)->nullable();
            $table->string('wife_mother_first_name', 60)->nullable();
            $table->string('wife_mother_middle_name', 60)->nullable();
            $table->string('wife_mother_maiden_last_name', 60)->nullable();
            $table->string('wife_mother_citizenship', 60)->nullable();
            
            // Marriage details
            $table->date('marriage_date')->nullable(); // Fixed: date should not have a length
            $table->string('marriage_place', 60)->nullable();
            $table->string('officiant_name', 60)->nullable();
            $table->string('officiant_position', 60)->nullable();
            $table->text('witnesses', 60)->nullable(); 
            $table->timestamps(); // For created_at and updated_at
            $table->foreign('User_Id')->references('User_Id')->on('users');
        });
        

        Schema::create('death_registrations', function (Blueprint $table) {
            $table->id('Death_Id');
            $table->string('user_name', 60)->nullable();
            $table->unsignedBigInteger('User_Id')->nullable();
            $table->string('full_name');
            $table->string('sex');
            $table->date('date_of_death');
            $table->date('date_of_birth');
            $table->integer('completed_years')->nullable();
            $table->string('months_days')->nullable();
            $table->string('hours_minutes_seconds')->nullable();
            $table->string('place_of_death');
            $table->string('civil_status')->nullable();
            $table->string('religion')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('residence');
            $table->string('father_name')->nullable();
            $table->string('mother_maiden_name')->nullable();
            $table->text('immediate_cause');
            $table->text('antecedent_cause')->nullable();
            $table->text('underlying_cause')->nullable();
            $table->text('other_conditions')->nullable();
            $table->string('maternal_condition')->nullable();
            $table->string('manner_of_death')->nullable();
            $table->string('place_of_occurrence');
            $table->string('autopsy')->nullable();
            $table->string('type_of_attendant')->nullable();
            $table->string('attendance_duration')->nullable();
            $table->string('certifying_officer')->nullable();
            $table->date('certification_date')->nullable();
            $table->string('corpse_disposal_method');
            $table->string('other_disposal_method_specify')->nullable();
            $table->string('cemetery_or_crematory_name');
            $table->string('cemetery_or_crematory_address')->nullable();
            $table->integer('age_of_mother')->nullable();
            $table->string('method_of_delivery')->nullable();
            $table->string('length_of_pregnancy')->nullable();
            $table->string('type_of_birth')->nullable();
            $table->string('multiple_birth_position')->nullable();
            $table->timestamps();
            $table->foreign('User_Id')->references('User_Id')->on('users');
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
