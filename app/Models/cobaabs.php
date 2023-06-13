<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cobaabs extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'jam_absen' ];

    
    public function cobaabs(){
        return $this->hasMany(cobadetabs::class, 'id_absen');
    }
}
