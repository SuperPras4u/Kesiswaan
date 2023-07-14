<?php

namespace App\Imports;

use App\Models\siswa;
use App\Models\orang_tua;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;


// class siswaImport implements ToModel, WithHeadingRow
// {
//     public function model(array $row)
//     {
//         dd($row);
//         $orangTua = orang_tua::create([
//             'Nama_Ayah' => $row[25],
//             'NIK_Ayah' => $row[26],
//             'Nama_Ibu' => $row[27],
//             'NIK_Ibu' => $row[28],
//             'Pekerjaan_Ayah' => $row[29],
//             'Pendidikan_Ayah' => $row[31],
//             'Pekerjaan_Ibu' => $row[30],
//             'Pendidikan_Ibu' => $row[32],
//             'No_Telepon_Ayah' => $row[35],
//             'No_Telepon_Ibu' => $row[36],
//         ]);

//         $siswa = siswa::create([
//             'Nama_Siswa' => $row[5],
//             'orang_tua_id' => $orangTua->id,
//             'NISN' => $row[7],
//             'NIS' => $row[2],
//             'Jenis_kelamin' => $row[6],
//             'Pleno' => $row[8],
//             'Agama' => $row[9],
//             'Tempat_Lahir' => $row[10],
//             'Tanggal_Lahir' => date('Y-m-d', strtotime($row[11])),
//             'Sekolah_Asal' => $row[12],
//             'Usia' => $row[13],
//             'Status_dalam_Keluarga' => $row[14],
//             'anak_ke' => $row[15],
//             'Alamat' => $row[16],
//             'jalan' => $row[17],
//             'RT' => $row[18],
//             'RW' => $row[19],
//             'kelurahan' => $row[20],
//             'Kecamatan' => $row[21],
//             'Kabupaten' => $row[22],
//             'Diterima_Pada' => date('Y-m-d', strtotime($row[23])),
//             'NIK_Siswa' => $row[24],
//             'tinggal_dengan' => $row[41],
//             'Jumlah_Saudara' => $row[42],
//             'Tinggi_Badan' => $row[43],
//             'Berat_Badan' => $row[44],
//             'Jarak_Rumah' => $row[45],
//             'no_akta' => $row[46],
//             'No_pendaftaran' => $row[47],
//         ]);

//         return $siswa;
//     }
// }


// class siswaImport implements ToCollection, WithHeadingRow
// {
    
//     public function collection(Collection $rows)
//     {
//         $siswaCollection = collect();
//         foreach ($rows as $row) {
//             // dd($row);
//             //  $data = $row->toArray();
//                // Simpan data orang tua
//                $orangTua = orang_tua::create([
//                 'Nama_Ayah' => $row['nama_ayah'],
//                 'NIK_Ayah' => $row['nik_ayah'],
//                 'Nama_Ibu' => $row['nama_ibu'],
//                 'NIK_Ibu' => $row['nik_ibu'],
//                 'Pekerjaan_Ayah' => $row['pekerjaan_ayah'],
//                 'Pendidikan_Ayah' => $row['pendidikan_ayah'],
//                 'Pekerjaan_Ibu' => $row['pekerjaan_ibu'],
//                 'Pendidikan_Ibu' => $row['pendidikan_ibu'],
//                 'No_Telepon_Ayah' => $row['no_telp_ayah'],
//                 'No_Telepon_Ibu' => $row['no_telp_ibu'],
//                 // Sesuaikan kolom dengan nama kolom di file Excel
//             ]);
    
//             // Simpan data siswa dan hubungkan dengan orang tua
//             $siswa = siswa::create([
//                 'Nama_Siswa' => $row['nama'],
//                 'orang_tua_id' => $orangTua->id,
//                 'NISN' => $row['nisn'],
//                 'NIS' => $row['nis'],
//                 'Jenis_kelamin' => $row['pl'],
//                 'Pleno' => $row['pleno'],
//                 'Agama' => $row['agama'],
//                 'Tempat_Lahir' => $row['tempat_lahir'],
//                 'Tanggal_Lahir' => date('Y-m-d', strtotime($row['tanggal_lahir'])),
//                 'Sekolah_Asal' => $row['asal_sekolah'],
//                 'Usia' => $row['umur'],
//                 'Status_dalam_Keluarga' => $row['status_kel'],
//                 'anak_ke' => $row['anak_ke'],
//                 'Alamat' => $row['alamat_lengkap'],
//                 'jalan' => $row['jalangangno'],
//                 'RT' => $row['rt'],
//                 'RW' => $row['rw'],
//                 'kelurahan' => $row['kelurahan'],
//                 'Kecamatan' => $row['kec'],
//                 'Kabupaten' => $row['kotakab'],
//                 'Diterima_Pada' => date('Y-m-d', strtotime($row['diterima'])),
//                 'NIK_Siswa' => $row['nik_siswa'],
//                 'tinggal_dengan' => $row['tinggal_dengan'],
//                 'Jumlah_Saudara' => $row['jumlah_saudara_kandung'],
//                 'Tinggi_Badan' => $row['tinggi_badan'],
//                 'Berat_Badan' => $row['berat_badan'],
//                 'Jarak_Rumah' => $row['jarak_rumah'],
//                 'no_akta' => $row['no_akta'],
//                 'No_pendaftaran' => $row['no_daftar'],
//                 // Sesuaikan kolom dengan nama kolom di file Excel
//             ]);
    
//             $siswaCollection->push($siswa); // Menyimpan siswa ke dalam koleksi
//         }

//         return $siswaCollection;
//     }
// }

class siswaImport implements ToCollection, WithHeadingRow
{
    private $kelasId;

    public function __construct($kelasId)
    {
        $this->kelasId = $kelasId;
    }

    public function collection(Collection $rows)
    {
        $siswaCollection = collect(); // Membuat koleksi kosong untuk menyimpan siswa
        
        foreach ($rows as $row) {
            if (!empty($row['nama'])) { // Validasi kolom 'Nama_Siswa'
                // Simpan data orang tua
                $orangTua = new orang_tua();
                $orangTua->Nama_Ayah = $row['nama_ayah'];
                $orangTua->NIK_Ayah = $row['nik_ayah'];
                $orangTua->Nama_Ibu = $row['nama_ibu'];
                $orangTua->NIK_Ibu = $row['nik_ibu'];
                $orangTua->Pekerjaan_Ayah = $row['pekerjaan_ayah'];
                $orangTua->Pendidikan_Ayah = $row['pendidikan_ayah'];
                $orangTua->Pekerjaan_Ibu = $row['pekerjaan_ibu'];
                $orangTua->Pendidikan_Ibu = $row['pendidikan_ibu'];
                $orangTua->No_Telepon_Ayah = $row['no_telp_ayah'];
                $orangTua->No_Telepon_Ibu = $row['no_telp_ibu'];
                $orangTua->save();

                // Simpan data siswa dan hubungkan  dengan orang tua
                $siswa = new siswa();
                $siswa->Nama_Siswa = $row['nama'];
                $siswa->orang_tua_id = $orangTua->id;
                $siswa->kelas_id = $this->kelasId;
                $siswa->NISN = $row['nisn'];
                $siswa->NIS = $row['nis'];
                $siswa->Jenis_kelamin = $row['pl'];
                $siswa->Pleno = $row['pleno'];
                $siswa->Agama = $row['agama'];
                $siswa->Tempat_Lahir = $row['tempat_lahir'];
                $siswa->Tanggal_Lahir = date('Y-m-d', strtotime($row['tanggal_lahir']));
                $siswa->Sekolah_Asal = $row['asal_sekolah'];
                $siswa->Usia = $row['umur'];
                $siswa->Status_dalam_Keluarga = $row['status_kel'];
                $siswa->anak_ke = $row['anak_ke'];
                $siswa->Alamat = $row['alamat_lengkap'];
                $siswa->jalan = $row['jalangangno'];
                $siswa->RT = $row['rt'];
                $siswa->RW = $row['rw'];
                $siswa->kelurahan = $row['kelurahan'];
                $siswa->Kecamatan = $row['kec'];
                $siswa->Kabupaten = $row['kotakab'];
                $siswa->Diterima_Pada = date('Y-m-d', strtotime($row['diterima']));
                $siswa->NIK_Siswa = $row['nik_siswa'];
                $siswa->tinggal_dengan = $row['tinggal_dengan'];
                $siswa->Jumlah_Saudara = $row['jumlah_saudara_kandung'];
                $siswa->Tinggi_Badan = $row['tinggi_badan'];
                $siswa->Berat_Badan = $row['berat_badan'];
                $siswa->Jarak_Rumah = $row['jarak_rumah'];
                $siswa->no_akta = $row['no_akta'];
                $siswa->No_pendaftaran = $row['no_daftar'];
                $siswa->save();

                $siswaCollection->push($siswa); // Menyimpan siswa ke dalam koleksi
            }
        }

        return $siswaCollection; // Mengembalikan seluruh koleksi siswa
    }
}