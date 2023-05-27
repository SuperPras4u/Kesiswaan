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

        siswa::create([
            'NISN' => $request->NISN,
            'NIS' => $request->NIS,
            'Nama_Siswa' => $request->Nama_Siswa,
            'Jenis_kelamin' => $request->Jenis_kelamin,
            'Agama' => $request->Agama,
            'Sekolah_Asal' => $request->Sekolah_Asal,
            'Tempat_Lahir' => $request->Tempat_Lahir,
            'Tanggal_Lahir' => $request->Tanggal_Lahir,
            'Usia' => $request->Usia,
            'Diterima_Pada' => $request->Diterima_Pada,
            'No_Pendaftaran' => $request->No_Pendaftaran,
            'NIK_Siswa' => $request->NIK_Siswa,
            'no_akta' => $request->no_akta,
            'tinggal_dengan' => $request->tinggal_dengan,
            'Tinggi_Badan' => $request->Tinggi_Badan,
            'Berat_Badan' => $request->Berat_Badan,
            'absensi' => $request->absensi,
            'Poin_Pelanggaran' => $request->Poin_Pelanggaran,
            'Foto' => $request->Foto,
            'Alamat' => $request->Alamat,
            'jalan' => $request->jalan,
            'kelurahan' => $request->kelurahan,
            'RT' => $request->RT,
            'RW' => $request->RW,
            'Kecamatan' => $request->Kecamatan,
            'Kabupaten' => $request->Kabupaten,
            'Provinsi' => $request->Provinsi,
            'Kode_Pos' => $request->Kode_Pos,
            'Status_dalam_Keluarga' => $request->Status_dalam_Keluarga,
            'anak_ke' => $request->anak_ke,
            'Jumlah_Saudara' => $request->Jumlah_Saudara,
        ]);

        // $valid = $request->validate([
        //     'NIS' => 'required|max:6|unique:siswas',
        //     'NISN' => 'required|max:10|unique:siswas',
        //     'Nama_Siswa' => 'required|max:30|unique:siswas',
        //     'Jenis_kelamin' => 'required|max:20',
        //     // 'Jurusan' => 'required|integer|gte:0',
        //     // 'Kelas' => 'required|numeric|gte:0',
        //     // 'Absensi' => 'required|numeric|gte:0',
        // ]);

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