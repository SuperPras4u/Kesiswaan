<?php

namespace App\Http\Controllers;

use App\Models\matapelajaran;
use Illuminate\Http\Request;

class MatapelajaranController extends Controller
{
    public function mapel()
    {
        $mapel = matapelajaran::all();
        return view('mapel.mapel', compact('mapel'));
    }
    public function createmapel(Request $request)
    {
        //dd($request->all());
        matapelajaran::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $mapel = matapelajaran::find($id);
        $mapel->nama_mapel = $request->input('nama_mapel');
        $mapel->save();

        return redirect()->back(); 
    }

    public function destroy($id)
    {
        $mapel = matapelajaran::find($id);
        $mapel->delete();
        return redirect()->back()->with('success', 'Jurusan berhasil dihapus.');
    }
}
