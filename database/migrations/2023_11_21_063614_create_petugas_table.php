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
        Schema::create('petugas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nama', 255);
            $table->enum('jenis_kelamin', ['Pria', 'Wanita']);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->string('no_telepon', 12);
            $table->text('alamat');
            $table->string('foto');

            $table->foreign('user_id')->references('id')->on('users');
        });
    }    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas');
    }
};
