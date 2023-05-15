<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'Nama_Jurusan', 'id_guru', ];

    
    public function ketuaJurusan()
{
    return $this->belongsTo(Guru::class, 'id_guru');
}

}
