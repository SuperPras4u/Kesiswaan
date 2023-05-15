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

    public function update(Request $request, $id)
    {
        $guru = Guru::find($id);
        $guru->Nama_Guru = $request->input('Nama_Guru');
        $guru->Alamat = $request->input('Alamat');
        $guru->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $guru = Guru::find($id);
        $guru->delete();
        return redirect()->back()->with('success', 'Jurusan berhasil dihapus.');
    }
}
