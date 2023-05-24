<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class siswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = siswa::all();
        return view('siswa.index', [
            'siswas' => $siswas,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tambah = siswa::where('NISN', true)->get();
        return view('siswa.tambah', [
            'tambah' => $tambah,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'NIS' => 'required|max:6|unique:siswas',
            'NISN' => 'required|max:10|unique:siswas',
            'Nama_Siswa' => 'required|max:30|unique:siswas',
            'Jurusan' => 'required|integer|gte:0',
            'Kelas' => 'required|numeric|gte:0',
            'Absensi' => 'required|numeric|gte:0',
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(siswa $siswa)
    {
        // $rubah = siswa::where('NIS', true)->get();
        // return view('siswa.edit', [
        //     'NIS' => $rubah,
        //     'siswa' => $siswa]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Siswa::where('id', $id)->delete();

        return redirect()->route('siswa')->with('success', 'Data siswa berhasil dihapus');

        // $siswaobj = siswa::findOrFail($siswa->NISN);
        // $siswaobj->delete();

        // return redirect()->route('siswa');

        // siswa::destroy($siswa->NISN);
        // return redirect()->route('siswa');
        // dd($siswa);
        // $siswa->delete();
        // return redirect()->route('siswa');
    }

    public function showProfile($NIS)
    {
        $profile = siswa::where('NIS', $NIS)->firstOrFail();

        return view('siswa.profile', compact('profile'));
        if ($profile) {
            return view('siswa.profile', compact('profile'));
        } else {
            return abort(404); // or redirect to an error page

        }
    }
}
