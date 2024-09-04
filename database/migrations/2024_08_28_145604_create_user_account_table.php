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
        Schema::create('User_Account', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('extension_name', 50)->nullable();
            $table->integer('month');
            $table->integer('day');
            $table->integer('year');
            $table->enum('sex', ['Male', 'Female', 'Other']);
            $table->string('mobile_number', 15);
            $table->string('email_address')->unique();
            $table->string('password');
            $table->string('house_no', 50);
            $table->string('zone', 50)->nullable();
            $table->string('barangay', 100);
            $table->boolean('terms_accepted')->default(false);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_account');
    }
};
