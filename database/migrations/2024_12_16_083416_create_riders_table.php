<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migration File
class CreateRidersTable extends Migration
{
    public function up()
    {
        Schema::create('riders', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('contact_number');
            $table->text('address');
            $table->string('vehicle_type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('riders');
    }
}
