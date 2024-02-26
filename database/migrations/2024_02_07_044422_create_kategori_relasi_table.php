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
        Schema::create('kategori_relasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bukuid');
            $table->foreign('bukuid')->references('id')->on('buku');
            $table->unsignedBigInteger('kategoriid');
            $table->foreign('kategoriid')->references('id')->on('kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_relasi');
    }
};
