<?php

namespace App\Http\Controllers;

use App\Models\orang_tua;
use Illuminate\Http\Request;

class ortucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ortus = orang_tua::all();
        return view('ortu.index', [
            'ortus' => $ortus,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $add = orang_tua::where('id', true)->get();
        return view('ortu.tambah', [
            'add' => $add,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            // 'NIK_Ayah' => 'required|numeric|gte:0|unique:orang_tuas',
            // 'Nama_Ayah' => 'required|max:50',
            // 'Pekerjaan_Ayah' => 'required|max:50',
            // 'Pendidikan_orang_tua' => 'required|max:30',
            // 'No_Telepon' => 'required|max:13',
            // 'NIK_Ibu' => 'required|numeric|gte:0|unique:orang_tuas',
            // 'Nama_Ibu' => 'required|max:50',
            // 'Pekerjaan_Ibu' => 'required|max:30',
            // 'Pendidikan_Ibu' => 'required|max:30',
            // 'No_Telepon_Ibu' => 'required|max:13',
            'NIK_Ayah' => 'nullable|numeric|gte:0|unique:orang_tuas,NIK_Ayah',
            'Nama_Ayah' => 'nullable|max:50|unique:orang_tuas,Nama_Ayah',
            'Pekerjaan_Ayah' => 'nullable|max:50',
            'Pendidikan_Ayah' => 'nullable|max:30',
            'No_Telepon_Ayah' => 'nullable|max:13|unique:orang_tuas,No_Telepon_Ayah',
            'NIK_Ibu' => 'nullable|numeric|gte:0|unique:orang_tuas,NIK_Ibu',
            'Nama_Ibu' => 'nullable|max:50|unique:orang_tuas,Nama_Ibu',
            'Pekerjaan_Ibu' => 'nullable|max:50',
            'Pendidikan_Ibu' => 'nullable|max:30',
            'No_Telepon_Ibu' => 'nullable|max:13|unique:orang_tuas,No_Telepon_Ibu',
        ]);

        orang_tua::create($valid);
        return redirect()->route('Ortu');
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
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        orang_tua::destroy($id);
        return redirect()->route('Ortu')->with('Data berhasih di hapus');
    }
}
