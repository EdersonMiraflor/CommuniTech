<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {

        Schema::create('certificates', function (Blueprint $table) {
            $table->id('Certificate_Id');
            $table->string('Cert_Type', 255);
            $table->timestamps();
        });

        Schema::create('transactions', function (Blueprint $table) {
            $table->id('Transaction_Id');
            $table->unsignedBigInteger('User_Id');
            $table->unsignedBigInteger('Certificate_Id');
            $table->date('Submitted_Date');
            $table->date('Pick_Up_Date');
            $table->string('Cert_Type', 255);
            $table->integer('Quantity');
            $table->unsignedBigInteger('Request_Id');
            $table->string('User_Appointment')->nullable();
            $table->enum('Status', ['Pending', 'Confirmed']);
            $table->enum('progress', ['Ongoing', 'Completed'])->default('Ongoing');
            $table->timestamps();
            $table->foreign('User_Id')->references('User_Id')->on('users');
            $table->foreign('Certificate_Id')->references('Certificate_Id')->on('certificates');
        });

        Schema::create('requests', function (Blueprint $table) {
            $table->id('Request_Id');
            $table->unsignedBigInteger('Transaction_Id');
            $table->enum('Status', ['Pending', 'Approved', 'Denied']);
            $table->integer('Quantity');
            $table->string('Cert_Type', 255);
            $table->timestamps();

            $table->foreign('Transaction_Id')->references('Transaction_Id')->on('transactions');
        });

        Schema::create('live_births', function (Blueprint $table) {
            $table->id('Live_Birth_Id');
            $table->unsignedBigInteger('Request_Id');
            $table->string('Last_Name', 255);
            $table->string('First_Name', 255);
            $table->string('Middle_Name', 255)->nullable();
            $table->date('Birth_Date');
            $table->enum('Sex', ['Male', 'Female']);
            $table->string('Place_Of_Birth', 255);
            $table->string('Type_Of_Birth', 255)->nullable();
            $table->string('Multiple_Birth_Child', 255)->nullable();
            $table->decimal('Weight_Of_Birth', 5, 2)->nullable();
            $table->string('Mother_Maiden_Name', 255)->nullable();
            $table->string('Mother_Maiden_Citizenship', 255)->nullable();
            $table->integer('Mother_Maiden_Age')->nullable();
            $table->string('Mother_Maiden_Occupation', 255)->nullable();
            $table->string('Mother_Maiden_Religion', 255)->nullable();
            $table->string('Father_Name', 255)->nullable();
            $table->string('Father_Name_Citizenship', 255)->nullable();
            $table->integer('Father_Name_Age')->nullable();
            $table->string('Father_Name_Occupation', 255)->nullable();
            $table->string('Father_Name_Religion', 255)->nullable();
            $table->timestamps();

            $table->foreign('Request_Id')->references('Request_Id')->on('requests');
        });

        Schema::create('marriages', function (Blueprint $table) {
            $table->id('Marriage_Id');
            $table->unsignedBigInteger('Request_Id');
            $table->string('Last_Name', 255);
            $table->string('First_Name', 255);
            $table->string('Middle_Name', 255)->nullable();
            $table->date('Birth_Date');
            $table->string('Cp_No', 255);
            $table->string('Place_Of_Birth', 255);
            $table->date('Date_Of_Marriage');
            $table->string('Citizenship', 255);
            $table->string('Mother_Maiden_Name', 255)->nullable();
            $table->string('Mother_Maiden_Citizenship', 255)->nullable();
            $table->integer('Mother_Maiden_Age')->nullable();
            $table->string('Mother_Maiden_Occupation', 255)->nullable();
            $table->string('Mother_Maiden_Religion', 255)->nullable();
            $table->string('Father_Name', 255)->nullable();
            $table->string('Father_Name_Citizenship', 255)->nullable();
            $table->integer('Father_Name_Age')->nullable();
            $table->string('Father_Name_Occupation', 255)->nullable();
            $table->string('Father_Name_Religion', 255)->nullable();
            $table->timestamps();

            $table->foreign('Request_Id')->references('Request_Id')->on('requests');
        });

        Schema::create('deaths', function (Blueprint $table) {
            $table->id('Death_Id');
            $table->unsignedBigInteger('Request_Id');
            $table->string('Last_Name', 255);
            $table->string('First_Name', 255);
            $table->string('Middle_Name', 255)->nullable();
            $table->date('Birth_Date');
            $table->enum('Sex', ['Male', 'Female']);
            $table->string('Place_Of_Death', 255);
            $table->string('Citizenship', 255);
            $table->string('Religion', 255)->nullable();
            $table->string('Civil_Status', 255)->nullable();
            $table->string('Occupation', 255)->nullable();
            $table->string('Cause_Of_Death', 255)->nullable();
            $table->string('Death_By_Non_Natural_Causes', 255)->nullable();
            $table->string('Manner_Of_Death', 255)->nullable();
            $table->string('Name_Of_Cemetery_Crematory', 255)->nullable();
            $table->string('Residence', 255)->nullable();
            $table->string('Attendant', 255)->nullable();
            $table->timestamps();

            $table->foreign('Request_Id')->references('Request_Id')->on('requests');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('certificates');
        Schema::dropIfExists('requests');
        Schema::dropIfExists('live_births');
        Schema::dropIfExists('marriages');
        Schema::dropIfExists('deaths');
    }
};
