<?php

namespace App\Http\Controllers;

use App\Models\detailpelanggaran;
use App\Models\pelanggaran;
use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
    public function pelanggaran()
    {
        $pelanggaran = pelanggaran::all();
        return view('pelanggaran.pelanggaransiswa', compact('pelanggaran'));
    }

    public function tambahpelanggaran(Request $request)
    {
        //dd($request->all());
        pelanggaran::create($request->all());
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function detailpelanggaran(Request $request)
    {
    // Validasi input
    $validatedData = $request->validate([
        'id_siswa' => 'required',
        'id_pelanggaran' => 'required',
        // tambahkan validasi untuk field lainnya
    ]);

    // Buat data baru
    $data = new detailpelanggaran();
    $data->id_siswa = $request->input('id_siswa');
    $data->id_pelanggaran = $request->input('id_pelanggaran');
    // set nilai field lainnya jika ada

    // Simpan data ke database
    $data->save();

    // Kirim respon
    return redirect()->back()->with('success', 'Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
