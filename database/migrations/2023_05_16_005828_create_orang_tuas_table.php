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
            $table->bigInteger('NIK_Ayah')->unique();
            $table->string('Nama_Ayah', 50);
            $table->string('Pekerjaan_Ayah');
            $table->string('Pendidikan_orang_tua');
            $table->bigInteger('No_Telepon');

            //ibu
            $table->bigInteger('NIK_Ibu')->unique();
            $table->string('Nama_Ibu', 50);
            $table->string('Pekerjaan_Ibu');
            $table->string('Pendidikan_Ibu');
            $table->bigInteger('No_Telepon_Ibu');
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
