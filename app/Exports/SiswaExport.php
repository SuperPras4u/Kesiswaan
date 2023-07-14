<?php

namespace App\Exports;

use App\Models\ClassKelas;
use App\Models\siswa;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

// class SiswaExport implements FromCollection
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {
//         return siswa::all();
//     }
// }
class SiswaExport implements FromCollection, WithHeadings
{
    private $kelasId;

    public function __construct($kelasId)
    {
        $this->kelasId = $kelasId;
    }

    public function collection()
    {   $kelas = ClassKelas::findOrFail($this->kelasId);
        $siswaCollection = Siswa::with('orangTua')
            ->where('kelas_id', $this->kelasId)
            ->get();

        $exportData = [];

        foreach ($siswaCollection as $siswa) {
            $exportData[] = [
                'Kelas' => $kelas->Nama_Kelas,
                'Nama' => $siswa->Nama_Siswa,
                'Nama Ayah' => $siswa->orangTua->Nama_Ayah,
                'NIK Ayah' => "'" . $siswa->orangTua->NIK_Ayah,
                'Nama Ibu' => $siswa->orangTua->Nama_Ibu,
                'NIK Ibu' =>  "'" . $siswa->orangTua->NIK_Ibu,
                'Pekerjaan Ayah' => $siswa->orangTua->Pekerjaan_Ayah,
                'Pendidikan Ayah' => $siswa->orangTua->Pendidikan_Ayah,
                'Pekerjaan Ibu' => $siswa->orangTua->Pekerjaan_Ibu,
                'Pendidikan Ibu' => $siswa->orangTua->Pendidikan_Ibu,
                'No Telepon Ayah' => $siswa->orangTua->No_Telepon_Ayah,
                'No Telepon Ibu' => $siswa->orangTua->No_Telepon_Ibu,
                'NISN' => $siswa->NISN,
                'NIS' => $siswa->NIS,
                'Jenis Kelamin' => $siswa->Jenis_kelamin,
                'Pleno' => $siswa->Pleno,
                'Agama' => $siswa->Agama,
                'Tempat Lahir' => $siswa->Tempat_Lahir,
                'Tanggal Lahir' => $siswa->Tanggal_Lahir,
                'Sekolah Asal' => $siswa->Sekolah_Asal,
                'Usia' => $siswa->Usia,
                'Status dalam Keluarga' => $siswa->Status_dalam_Keluarga,
                'Anak ke' => $siswa->anak_ke,
                'Alamat' => $siswa->Alamat,
                'Jalan' => $siswa->jalan,
                'RT' => $siswa->RT,
                'RW' => $siswa->RW,
                'Kelurahan' => $siswa->kelurahan,
                'Kecamatan' => $siswa->Kecamatan,
                'Kabupaten' => $siswa->Kabupaten,
                'Diterima Pada' => $siswa->Diterima_Pada,
                'NIK Siswa' => "'" . $siswa->NIK_Siswa,
                'Tinggal Dengan' => $siswa->tinggal_dengan,
                'Jumlah Saudara' => $siswa->Jumlah_Saudara,
                'Tinggi Badan' => $siswa->Tinggi_Badan,
                'Berat Badan' => $siswa->Berat_Badan,
                'Jarak Rumah' => $siswa->Jarak_Rumah,
                'No Akta' => $siswa->no_akta,
                'No Pendaftaran' => $siswa->No_pendaftaran,
            ];
        }

        return collect($exportData);
    }

    public function headings(): array
    {
        return [
            'Kelas',
            'Nama',
            'Nama Ayah',
            'NIK Ayah',
            'Nama Ibu',
            'NIK Ibu',
            'Pekerjaan Ayah',
            'Pendidikan Ayah',
            'Pekerjaan Ibu',
            'Pendidikan Ibu',
            'No Telepon Ayah',
            'No Telepon Ibu',
            'NISN',
            'NIS',
            'Jenis Kelamin',
            'Pleno',
            'Agama',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Sekolah Asal',
            'Usia',
            'Status dalam Keluarga',
            'Anak ke',
            'Alamat',
            'Jalan',
            'RT',
            'RW',
            'Kelurahan',
            'Kecamatan',
            'Kabupaten',
            'Diterima Pada',
            'NIK Siswa',
            'Tinggal Dengan',
            'Jumlah Saudara',
            'Tinggi Badan',
            'Berat Badan',
            'Jarak Rumah',
            'No Akta',
            'No Pendaftaran',
        ];
    }
}