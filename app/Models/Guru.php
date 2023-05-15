<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    

    protected $fillable = ['id', 'Nama_Guru', 'Alamat', 'Tempat_Lahir', 'Tanggal_Lahir', 'id_mapel'];
}
