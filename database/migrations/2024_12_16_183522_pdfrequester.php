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
        Schema::create('PdfRequesters', function (Blueprint $table) {
            $table->id('req_no'); 
            $table->unsignedBigInteger('User_Id'); 

            $table->enum('certificate_type', ['Birth Certificate', 'Marriage Certificate', 'Death Certificate']);

            $table->timestamps();

            $table->foreign('User_Id')->references('User_Id')->on('users')->onDelete('cascade');
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pdfrequesters');
    }
};
