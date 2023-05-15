<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function jurusan()
    {
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

    public function update(Request $request, $id)
    {
        $Jurusan = Jurusan::find($id);
        $Jurusan->Nama_Jurusan = $request->input('Nama_Jurusan', 'id_guru');
        $Jurusan->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $jurusan = Jurusan::find($id);
        $jurusan->delete();
        return redirect()->back()->with('success', 'Jurusan berhasil dihapus.');
    }

}
