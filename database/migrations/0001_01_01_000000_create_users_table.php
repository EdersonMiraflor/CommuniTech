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
        Schema::create('users', function (Blueprint $table) {
            $table->id('User_Id');
            $table->enum('Credential', ['user', 'admin', 'rider']);
            $table->string('name');
            $table->string('Middle_Name', 255   )->nullable();
            $table->string('Last_Name', 255);
            $table->date('Birth_Date');
            $table->enum('Sex', ['male', 'female']);
            $table->string('Mobile_Number', 15);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('Address', 255)->nullable();
            $table->unsignedBigInteger('Request_Id')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        Schema::create('contacts', function (Blueprint $table) {
            $table->id('Inquire_No'); // Primary key
            $table->unsignedBigInteger('User_Id')->nullable(); // Foreign key to the users table
            $table->string('First_Name', 255); // First Name column
            $table->string('Last_Name', 255); // Last Name column
            $table->string('Email_Address', 255); // Email column
            $table->text('Query'); // Query column
            $table->timestamps(); // created_at and updated_at columns
        
            // Foreign key constraint
            $table->foreign('User_Id')
                  ->references('id') // Assuming primary key in users table is `id`
                  ->on('users')
                  ->onDelete('cascade'); // Cascade delete for user-related inquiries
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('contact');
    }
};
