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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('NIP')->unique()->nullable();
            $table->BigInteger('NUPTK')->unique()->nullable();
            $table->BigInteger('NIK')->unique();
            $table->string('Nama_Lengkap', 50)->unique();
            $table->string('Tempat_Lahir')->unique();
            $table->date('Tanggal_Lahir');
            $table->string('Agama');
            $table->string('Jenis_Kelamin');
            $table->string('Alamat')->nullable();
            $table->string('Desa_Kel');
            $table->integer('RT');
            $table->integer('RW');
            $table->string('Kecamatan');
            $table->string('Kabupaten');
            $table->string('Provinsi');
            $table->integer('Kode_Pos')->nullable();
            $table->string('Pendidikan_Terakhir');
            $table->string('Gelar')->unique()->nullable();
            $table->string('Kewarganegaran');
            $table->string('Status_Pernikahan');
            $table->string('Pangkat')->nullable();
            $table->string('Jabatan')->nullable();
            $table->date('Tanggal_Masuk')->nullable();
            $table->string('Status_kep')->nullable();
            $table->BigInteger('No_Telepon');
            $table->string('email');
            $table->string('Foto');
            $table->foreignId('kelas_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
