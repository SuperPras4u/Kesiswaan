<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orang_tua extends Model
{
    use HasFactory;
    protected $fillable = [
        'NIK_Ayah',
        // Daftar atribut lainnya yang diizinkan untuk mass assignment
        'Nama_Ayah',
        'Pekerjaan_Ayah',
        'Pendidikan_Ayah',
        'No_Telepon_Ayah',
        'NIK_Ibu',
        'Nama_Ibu',
        'Pekerjaan_Ibu',
        'Pendidikan_Ibu',
        'No_Telepon_Ibu',
    ];

    public function siswas()
    {
        return $this->hasMany(Siswa::class);
    }

}
