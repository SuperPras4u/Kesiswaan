<?php

namespace App\Models;

use App\Models\orang_tua;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'NISN';
    }

    public function orangTua()
    {
        return $this->belongsTo(orang_tua::class, 'orang_tua_id', 'id');
    }

    public function siswakelas()
    {
        return $this->belongsTo(ClassKelas::class, 'kelas_id', 'id');
    }

    public function absensi(){
        return $this->hasMany(cobadetabs::class, 'id_siswa', 'id');
    }
    
    public function pelanggaran(){
        return $this->hasMany(detailpelanggaran::class, 'id_siswa', 'id');
    }

}