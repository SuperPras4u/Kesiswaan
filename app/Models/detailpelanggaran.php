<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailpelanggaran extends Model
{
    use HasFactory;
    public function pelanggaransiswa()
    {
        return $this->belongsTo(cobasis::class, 'id_siswa', 'id');
    }

    public function pelanggarannama()
    {
        return $this->belongsTo(pelanggaran::class, 'id_pelanggaran', 'id');
    }
}
