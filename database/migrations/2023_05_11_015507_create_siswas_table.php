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
        Schema::create('siswas', function (Blueprint $table) {
            //data siswa
            $table->id();
            $table->foreignId("orang_tua_id")->nullable();
            $table->foreignId("kelas_id")->nullable();
            $table->integer("NISN")->unique();
            $table->string("NIS")->unique();
            $table->string("Nama_Siswa", 50)->unique();
            $table->string("Jenis_kelamin");
            $table->string("Agama");
            $table->string("Sekolah_Asal", 50);
            $table->string("Tempat_Lahir", 30);
            $table->date("Tanggal_Lahir");
            $table->integer("Usia");
            $table->date("Diterima_Pada")->nullable();
            $table->integer("No_pendaftaran")->nullable();
            $table->bigInteger("NIK_Siswa")->unique();
            $table->string("no_akta")->unique();
            $table->string("tinggal_dengan", 11)->default("Orang Tua");
            $table->integer("Tinggi_Badan")->default(0);
            $table->integer("Berat_badan")->default(0);
            // $table->string("absensi")->default("H");
            // $table->bigInteger("Poin_Pelanggaran")->default(0);
            $table->string("Foto")->unique()->nullable();
            // $table->string("Kelas"); (id siswa di letakan pada table kelas agar relasi menjadi satu kelas banyak siswa)
            // $table->string("Id_Jurusan", 50); (id_siswa di table jurusan agar relasi menjadi one to many)

            //alamat
            $table->string("Alamat")->nullable();
            $table->string("jalan");
            $table->string("kelurahan");
            $table->string("RT");
            $table->string("RW");
            $table->string("Kecamatan");
            $table->string("Kabupaten");
            $table->string("Provinsi");
            $table->integer("Kode_Pos")->nullable();
            //data keluarga
            $table->string("Status_dalam_Keluarga")->nullable()->default("Anak_Kandung");
            $table->string("anak_ke");
            $table->integer("Jumlah_Saudara");
            $table->string("Pleno")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
