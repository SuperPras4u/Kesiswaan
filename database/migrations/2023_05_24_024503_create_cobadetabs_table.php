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
        Schema::create('cobadetabs', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_absen');
            $table->integer('id_kelas');
            $table->bigInteger('id_siswa');
            $table->integer('id_mapel');
            $table->string('kehadiran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cobadetabs');
    }
};
