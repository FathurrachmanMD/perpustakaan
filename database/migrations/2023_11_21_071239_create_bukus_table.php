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
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 255);
            $table->unsignedBigInteger('kategori_id');
            $table->unsignedBigInteger('penerbit_id');
            $table->unsignedBigInteger('pengarang_id');
            $table->string('isbn', 20);
            $table->tinyInteger('jumlah_halaman');
            $table->tinyInteger('jumlah_stok');
            $table->date('tanggal_rilis');
            $table->text('sinopsis');
            $table->string('gambar');

            $table->foreign('kategori_id')->references('id')->on('kategori');
            $table->foreign('penerbit_id')->references('id')->on('penerbit');
            $table->foreign('pengarang_id')->references('id')->on('pengarang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
