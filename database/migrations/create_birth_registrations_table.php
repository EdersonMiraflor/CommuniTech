<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBirthRegistrationsTable extends Migration
{
    public function up()
    {
        Schema::create('birth_registrations', function (Blueprint $table) {
            $table->id();
            
            // Child's Information
            $table->string('child_first_name');
            $table->string('child_middle_name')->nullable();
            $table->string('child_last_name');
            $table->enum('child_sex', ['Male', 'Female']);
            $table->date('child_date_of_birth');
            $table->string('child_place_of_birth');
            
            // Mother's Information
            $table->string('mother_first_name');
            $table->string('mother_middle_name')->nullable();
            $table->string('mother_last_name');
            $table->date('mother_date_of_birth');
            $table->string('mother_citizenship');
            $table->string('mother_religion');
            $table->string('mother_occupation');
            $table->string('mother_residence');
            
            // Father's Information
            $table->string('father_first_name');
            $table->string('father_middle_name')->nullable();
            $table->string('father_last_name');
            $table->date('father_date_of_birth');
            $table->string('father_citizenship');
            $table->string('father_religion');
            $table->string('father_occupation');
            $table->string('father_residence');
            
            // Informant's Information
            $table->string('informant_name');
            $table->string('informant_relationship_to_child');
            $table->string('informant_address');
            $table->date('informant_date_signed');
            
            // Attendant's Information
            $table->string('attendant_name');
            $table->string('attendant_title');
            $table->string('attendant_address');
            $table->date('attendant_date_signed');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('birth_registrations');
    }
}
