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
        Schema::create('orang_tuas', function (Blueprint $table) {
            $table->id();
            //ayah
            $table->bigInteger('NIK_Ayah')->unique()->nullable();
            $table->string('Nama_Ayah', 50)->unique()->nullable();
            $table->string('Pekerjaan_Ayah', 50)->nullable();
            $table->string('Pendidikan_Ayah', 30)->nullable();
            $table->string('No_Telepon_Ayah', 13)->unique()->nullable();

            //ibu
            $table->bigInteger('NIK_Ibu')->unique()->nullable();
            $table->string('Nama_Ibu', 50)->unique()->nullable();
            $table->string('Pekerjaan_Ibu', 50)->nullable();
            $table->string('Pendidikan_Ibu', 30)->nullable();
            $table->string('No_Telepon_Ibu', 13)->unique()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orang_tuas');
    }
};
