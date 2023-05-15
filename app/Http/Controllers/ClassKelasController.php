<?php

namespace App\Http\Controllers;
use App\Models\ClassKelas;
use App\Models\Guru;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class ClassKelasController extends Controller
{
    public function kelas(){
        $Class = ClassKelas::all();
        $teach = Guru::all();
        $Jurusan = Jurusan::all();
         return view('Data-Kelas.Data-Kelas', compact('Jurusan', 'teach', 'Class'));
     }
     public function tambahkelas(Request $request)
     {   
         //dd($request->all());
         ClassKelas::create($request->all());
         return redirect()->back();
     }
}
