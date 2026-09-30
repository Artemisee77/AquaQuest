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
        Schema::create('kartu', function (Blueprint $table) {
            $table->id(); // PK: id (INT)
            $table->foreignId('biota_id')->constrained('biota')->onDelete('cascade'); // FK[cite: 1]
            $table->string('nama');
            $table->string('gambar')->nullable();
            $table->integer('ex_syarat')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kartus');
    }
};
