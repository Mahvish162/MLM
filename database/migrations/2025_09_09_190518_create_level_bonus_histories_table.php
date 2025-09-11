<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('level_bonus_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('from_user_id'); // who generated staking
            $table->unsignedBigInteger('to_user_id')->nullable(); // who should receive bonus
            $table->integer('level'); // level 1-15
            $table->decimal('percent', 5, 2); // e.g. 30.00
            $table->decimal('bonus_amount', 15, 2);
            $table->enum('status', ['paid', 'laps'])->default('laps'); // paid or laps
            $table->timestamp('credited_at')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('from_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('to_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('level_bonus_histories');
    }
};
