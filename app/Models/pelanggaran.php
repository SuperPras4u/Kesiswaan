<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggaran extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_pelanggaran', 'poin_pelanggaran' ];

    public function detail(){
        return $this->hasMany(detailpelanggaran::class, 'id_pelanggaran', 'id');
    }
}
