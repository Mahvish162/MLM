<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('level_bonus_incomes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // who received bonus
            $table->unsignedBigInteger('from_user_id'); // who generated staking
            $table->integer('level'); // level number
            $table->decimal('percent', 5, 2);
            $table->decimal('amount', 15, 2);
            $table->string('remark')->nullable(); // e.g. "Level 3 Income from #123"
            $table->timestamps();

            // foreign keys
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('from_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('level_bonus_incomes');
    }
};
