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
        Schema::create('pelanggarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId("siswa_id");
            $table->integer("No_Pelanggaran");
            $table->string("Nama_Pelanggaran");
            $table->string("Poin_Pelanggaran");
            $table->string("jenis_Pelanggaran");
            $table->string("konsekuensi");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggarans');
    }
};
