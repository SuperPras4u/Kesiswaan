<?php

namespace App\Http\Controllers;

use App\Models\ClassKelas;
use App\Models\Guru;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class ClassKelasController extends Controller
{
    public function kelas()
    {
        $class = ClassKelas::all();
        $teach = Guru::all();
        $Jurusan = Jurusan::all();
        return view('Data-Kelas.Data-Kelas', compact('Jurusan', 'teach', 'class'));
    }
    public function tambahkelas(Request $request)
    {
        //dd($request->all());
        ClassKelas::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $class = ClassKelas::find($id);
        $class->Nama_Kelas = $request->input('Nama_Kelas', 'id_jurusan', 'id_guru');
        $class->save();

        return redirect()->back(); 
    }

    public function destroy($id)
    {
        $class = ClassKelas::find($id);
        $class->delete();
        return redirect()->back()->with('success', 'Jurusan berhasil dihapus.');
    }
}
