<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cobakelas extends Model
{
    use HasFactory;

    protected $fillable = ['id','id_kelas', 'nama_kelas' ];

    public function cobasiswa(){
        return $this->hasMany(cobasis::class, 'id_kelas', 'id');
    }
}
