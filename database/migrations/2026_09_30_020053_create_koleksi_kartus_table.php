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
        Schema::create('koleksi_kartu', function (Blueprint $table) {
            $table->id(); // PK: id (INT)[cite: 1]
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // FK[cite: 1]
            $table->foreignId('kartu_id')->constrained('kartu')->onDelete('cascade'); // FK[cite: 1]
            $table->timestamp('didapat_at')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('koleksi_kartus');
    }
};
