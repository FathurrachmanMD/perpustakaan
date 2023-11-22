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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pinjam');
            $table->tinyInteger('lama_pinjam');
            $table->text('keterangan');
            $table->enum('status', ['Dipinjam', 'Belum Dikembalikan', 'Sudah dikembalikan']);
            $table->unsignedBigInteger('anggota_id');
            $table->unsignedBigInteger('petugas_id');
            $table->tinyInteger('jumlah');

            $table->foreign('anggota_id')->references('id')->on('anggota');
            $table->foreign('petugas_id')->references('id')->on('petugas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
