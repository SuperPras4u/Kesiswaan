<?php

namespace App\Http\Controllers;
use App\Models\Jurusan;
use App\Models\Guru;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function jurusan(){
        $jurusan = Jurusan::all();
        $teach = Guru::all();
         return view('Data-Jurusan.Data-Jurusan', compact('jurusan', 'teach'));
     }
     public function tambahjurusan(Request $request)
     {   
         //dd($request->all());
         Jurusan::create($request->all());
         return redirect()->route('jurusan');
     }
}
