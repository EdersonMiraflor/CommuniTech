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
        Schema::create('announcement', function (Blueprint $table) {
            $table->id('Memo_id');
            $table->unsignedBigInteger('User_Id')->nullable();
            $table->string('announcement_title')->nullable();
            $table->text('announcement_text')->nullable();
            $table->timestamps(); // Created at and Updated at
            $table->foreign('User_Id')->references('User_Id')->on('users');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcement');
    }
};
