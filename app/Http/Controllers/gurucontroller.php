<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class gurucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gurus = guru::all();
        return view('guru.index', [
            'gurus' => $gurus,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tambah = guru::where('NIP', true)->get();
        return view('guru.tambah', ['tambah' => $tambah]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'NIP' => 'nullable|unique:gurus',
            'NUPTK' => 'nullable|unique:gurus',
            'NIK' => 'unique:gurus',
            'Nama_Lengkap' => 'required|unique:gurus|max:50',
            'Tempat_Lahir' => 'required|unique:gurus',
            'Tanggal_Lahir' => 'required|date',
            'Agama' => 'required',
            'Jenis_Kelamin' => 'required',
            'Usia' => 'required|integer',
            'Alamat' => 'nullable',
            'jalan' => 'nullable',
            'Desa_Kel' => 'required',
            'RT' => 'required|integer',
            'RW' => 'required|integer',
            'Kecamatan' => 'required',
            'Kabupaten' => 'required',
            'Provinsi' => 'required',
            'Kode_Pos' => 'nullable|integer',
            'Pendidikan_Terakhir' => 'required',
            'Gelar' => 'unique:gurus',
            'Kewarganegaraan' => 'required',
            'Status_Pernikahan' => 'nullable',
            'Pangkat' => 'nullable',
            'Jabatan' => 'nullable',
            'Tanggal_Masuk' => 'nullable|date',
            'Status_kep' => 'nullable',
            'No_Telepon' => 'nullable|integer',
            'email' => 'nullable|email',
            'Foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'kelas_id' => 'nullable|exists:kelas,id',
        ]);

        // Simpan foto jika ada
        if ($request->hasFile('Foto')) {
            $file = $request->file('Foto');
            $filename = $request->input('Nama_Lengkap') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads.guru'), $filename);
            $validatedData['Foto'] = $filename;
        }

        // Simpan data ke database
        Guru::create($validatedData);

        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil ditambahkan.');

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
        //
    }
}
