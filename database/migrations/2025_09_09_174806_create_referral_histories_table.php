
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('referral_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('from_user_id'); // buyer
            $table->unsignedBigInteger('to_user_id');   // referrer
            $table->string('to_user_refcode')->nullable();
            $table->decimal('commission_amount', 10, 2);
            $table->enum('status', ['pending', 'paid'])->default('pending');
            $table->timestamp('credited_at')->nullable();
            $table->timestamps();

            $table->foreign('from_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('to_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('referral_histories');
    }
};
