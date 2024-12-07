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
            $table->enum('multiple_birth', ['Single', 'Twin', 'Triplets', 'Other']);
            $table->string('birth_type', 100)->nullable();
            $table->integer('birth_order')->nullable();
            $table->float('birth_weight', 8, 2)->nullable();

            // Mother's Details
            $table->string('mother_first_name', 100);
            $table->string('mother_middle_name', 100)->nullable();
            $table->string('mother_last_name', 100);
            $table->string('citizenship', 100)->nullable();
            $table->string('religion', 100)->nullable();
            $table->integer('total_number')->nullable(); 
            $table->integer('children')->nullable(); 
            $table->integer('dead_child')->nullable();
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
            $table->string('other_attendant_role', 100)->nullable(); 

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
            $table->string('affiant_name');
            $table->string('legal_status')->nullable();
            $table->string('affiant_address')->nullable();
            $table->string('deceased_name');
            $table->string('burial_place')->nullable();
            $table->string('attended_by')->nullable();
            $table->string('attended_by_person')->nullable();
            $table->boolean('not_attended')->nullable();
            $table->text('cause_of_death')->nullable();
            $table->text('reason_delay')->nullable();
            $table->integer('day_signed')->nullable();
            $table->string('month_signed')->nullable();
            $table->integer('year_signed')->nullable();
            $table->string('place_signed')->nullable();
            $table->integer('day_sworn')->nullable();
            $table->string('month_sworn')->nullable();
            $table->integer('year_sworn')->nullable();
            $table->string('place_sworn')->nullable();
            $table->date('tax_cert_date')->nullable();
            $table->string('tax_cert_place')->nullable();

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
