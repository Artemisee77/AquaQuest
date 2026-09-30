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
        Schema::create('soal_kuis', function (Blueprint $table) {
            $table->id(); // PK: id (INT)
            $table->foreignId('biota_id')->constrained('biota')->onDelete('cascade'); // FK
            $table->enum('tipe', ['pilihan_ganda', 'esay'])->default('pilihan_ganda');
            $table->text('pertanyaan');
            $table->string('gambar')->nullable();
            $table->string('opsi_a')->nullable();
            $table->string('opsi_b')->nullable();
            $table->string('opsi_c')->nullable();
            $table->string('opsi_d')->nullable();
            $table->string('jawaban_benar');
            $table->integer('poin')->default(10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soal_kuis');
    }
};
