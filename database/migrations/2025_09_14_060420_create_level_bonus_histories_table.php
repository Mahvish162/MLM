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
    Schema::create('level_bonus_histories', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('from_user_id');
        $table->unsignedBigInteger('to_user_id');
        $table->integer('level');
        $table->decimal('percent', 5, 2);
        $table->decimal('bonus_amount', 12, 2);
        $table->string('status')->default('laps'); // laps / paid
        $table->timestamp('credited_at')->nullable();
        $table->timestamps();

        $table->foreign('from_user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('to_user_id')->references('id')->on('users')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('level_bonus_histories');
    }
};
