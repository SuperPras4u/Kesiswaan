<?php

namespace App\Http\Controllers;
use App\Models\Guru;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function Guru(){
       $guru = guru::all();
        return view('Data-Guru.MenuGuru', compact('guru'));
    }
    public function tambahguru(Request $request)
    {   
        //dd($request->all());
        Guru::create($request->all());
        return redirect()->back();
    }
}
