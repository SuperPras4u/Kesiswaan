<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cobasis extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_siswa' , 'id_kelas' ];

    public function absensi(){
        return $this->hasMany(cobadetabs::class, 'id_siswa', 'id');
    }

    public function pelanggaran(){
        return $this->hasMany(detailpelanggaran::class, 'id_siswa', 'id');
    }
    public function kelaskesiswa()
    {
        return $this->belongsTo(cobakelas::class, 'id_kelas', 'id');
    }
}

