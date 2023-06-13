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
            $table->string('jam1');
            $table->string('jam2');
            $table->string('jam3');
            $table->string('jam4');
            $table->string('jam5');
            $table->string('jam6');
            $table->string('jam7');
            $table->string('jam8');
            $table->string('jam9');
            $table->string('jam10');
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
