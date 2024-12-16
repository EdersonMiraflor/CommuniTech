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
            Schema::create('paymentrecord', function (Blueprint $table) {
                $table->id('Payment_Id');
                $table->unsignedBigInteger('User_Id');
                $table->string('name'); 
                $table->string('requested_certificate');
                $table->string('email'); 
                $table->integer('quantity');
                $table->string('address');
                $table->string('mobile');
                $table->string('barangay');
                $table->string('proof')->nullable();
                $table->enum('status', ['pending', 'verified'])->default('pending'); 
                $table->timestamps();

                $table->foreign('User_Id')->references('User_Id')->on('users');
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('paymentrecord');
        }
    };
