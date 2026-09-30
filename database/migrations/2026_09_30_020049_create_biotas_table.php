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
        Schema::create('biota', function (Blueprint $table) {
            $table->id(); // PK: id (INT)
            $table->string('nama');
            $table->string('nama_latin')->nullable();
            $table->string('slug')->unique();
            $table->string('kategori');
            $table->text('deskripsi');
            $table->string('habitat')->nullable();
            $table->string('status_konservasi')->nullable();
            $table->string('gambar')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biotas');
    }
};
