<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        siswa::create([
            "NIS" => '0067183778',
            "Nama_Siswa" => 'ADEN PRADIPTA PUTRA SUSENO ',
            "Jenis_kelamin" => '1',
            "Agama" => 'Islam',
            "Sekolah_Asal" => 'SMPN 15 MALANG ',
            "Tempat_Lahir" => 'Malang',
            "Tanggal_Lahir" => '7-juni-2006',
            "Usia" => '17',

        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
