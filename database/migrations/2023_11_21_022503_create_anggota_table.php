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
        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama', 255);
            $table->enum('jenis_kelamin', ['Pria', 'Wanita']);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->string('no_telepon', 12);
            $table->text('alamat');
            $table->string('foto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};
