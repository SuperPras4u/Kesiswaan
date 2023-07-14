<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cobadetabs extends Model
{
    use HasFactory;

    protected $fillable = ['id_siswa','id_kelas', 'tanggal_absen',  'jam1',  'jam2',  'jam3',  'jam4',  'jam5',  'jam6',  'jam7',  'jam8',  'jam9',  'jam10'];

    public function abseen()
    {
        return $this->belongsTo(cobaabs::class, 'id_absen');
    }

    public function siswaa()
    {
        return $this->belongsTo(siswa::class, 'id_siswa', 'id');
    }

    // public static $rules = [
    //     'id_siswa' => 'unique:cobadetabs,id_siswa,NULL,id,tanggal_absen,:tanggal_absen',
    // ];
    
    
}
