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
        Schema::create('game_history', function (Blueprint $table) {
            $table->id(); // PK: id (INT)[cite: 1]
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // FK[cite: 1]
            $table->timestamp('mulai_at')->nullable();
            $table->timestamp('selesai_at')->nullable();
            $table->enum('status', ['berjalan', 'selesai'])->default('berjalan');
            $table->json('soal_ids');
            $table->json('jawaban')->nullable();
            $table->integer('jumlah_benar')->default(0);
            $table->integer('ex_didapat')->default(0);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_histories');
    }
};
