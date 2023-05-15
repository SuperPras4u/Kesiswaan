<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassKelas extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Jurusan()
{
    return $this->belongsTo(Jurusan::class, 'id_jurusan');
}

public function guru()
{
    return $this->belongsTo(Guru::class, 'id_guru');
}

}
