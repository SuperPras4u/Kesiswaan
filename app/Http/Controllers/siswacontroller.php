<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class siswacontroller extends Controller
{
    public function import(Request $request)
    {
        // Validasi file yang diunggah
        $request->validate([
            'file' => 'required|mimes:xls,xlsx',
        ]);

        // Ambil file yang diunggah
        $file = $request->file('file');

        // Proses import data dari file Excel
        try {
            Excel::import(new DataImport, $file);

            return redirect()->back()->with('success', 'Data berhasil diimpor!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengimpor data: ' . $e->getMessage());
        }
    }

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

        $val = $request->validate([
            'orang_tua_id' => 'nullable|exists:orang_tuas,id',
            'NISN' => 'required|unique:siswas,NISN',
            'NIS' => 'required|unique:siswas,NIS',
            'Nama_Siswa' => 'required|unique:siswas,Nama_Siswa|max:50',
            'Jenis_kelamin' => 'required',
            'Agama' => 'required',
            'Sekolah_Asal' => 'required|max:50',
            'Tempat_Lahir' => 'required|max:30',
            'Tanggal_Lahir' => 'required|date',
            'Usia' => 'required|integer',
            'Diterima_Pada' => 'nullable|date',
            'No_pendaftaran' => 'nullable|integer',
            'NIK_Siswa' => 'required|unique:siswas,NIK_Siswa',
            'no_akta' => 'required|unique:siswas,no_akta',
            'tinggal_dengan' => 'required|max:11',
            'Tinggi_Badan' => 'integer',
            'Berat_badan' => 'integer',
            // 'absensi' => 'required',
            // 'Poin_Pelanggaran' => 'integer',
            'Foto' => 'required|unique:siswas,Foto',
            'jalan' => 'required',
            'kelurahan' => 'required',
            'RT' => 'required',
            'RW' => 'required',
            'Kecamatan' => 'required',
            'Kabupaten' => 'required',
            'Provinsi' => 'required',
            'Kode_Pos' => 'nullable|integer',
            'Status_dalam_Keluarga' => 'required',
            'anak_ke' => 'required',
            'Jumlah_Saudara' => 'required|integer',
            'Pleno' => 'nullable',
        ]);
        if ($request->hasFile('Foto')) {
            $file = $request->file('Foto');
            $fileName = $request->input('Nama_Siswa') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $fileName);

            //  Simpan nama file foto ke dalam kolom 'Foto' pada tabel siswa
            $siswa = new Siswa;
            $siswa->NISN = $request->input('NISN');
            $siswa->NIS = $request->input('NIS');
            $siswa->Nama_Siswa = $request->input('Nama_Siswa');
            $siswa->Jenis_kelamin = $request->input('Jenis_kelamin');
            $siswa->Agama = $request->input('Agama');
            $siswa->Sekolah_Asal = $request->input('Sekolah_Asal');
            $siswa->Tempat_Lahir = $request->input('Tempat_Lahir');
            $siswa->Tanggal_Lahir = $request->input('Tanggal_Lahir');
            $siswa->Usia = $request->input('Usia');
            $siswa->Diterima_Pada = $request->input('Diterima_Pada');
            $siswa->No_pendaftaran = $request->input('No_Pendaftaran');
            $siswa->NIK_Siswa = $request->input('NIK_Siswa');
            $siswa->no_akta = $request->input('no_akta');
            $siswa->tinggal_dengan = $request->input('tinggal_dengan');
            $siswa->Tinggi_Badan = $request->input('Tinggi_Badan');
            $siswa->Berat_badan = $request->input('Berat_badan');
            // $siswa->absensi = $request->input('absensi');
            // $siswa->Poin_Pelanggaran = $request->input('Poin_Pelanggaran');
            $siswa->Foto = $fileName;
            $siswa->jalan = $request->input('jalan');
            $siswa->kelurahan = $request->input('kelurahan');
            $siswa->RT = $request->input('RT');
            $siswa->RW = $request->input('RW');
            $siswa->Kecamatan = $request->input('Kecamatan');
            $siswa->Kabupaten = $request->input('Kabupaten');
            $siswa->Provinsi = $request->input('Provinsi');
            $siswa->Kode_Pos = $request->input('Kode_Pos');
            $siswa->Status_dalam_Keluarga = $request->input('Status_dalam_Keluarga');
            $siswa->anak_ke = $request->input('anak_ke');
            $siswa->Jumlah_Saudara = $request->input('Jumlah_Saudara');
            $siswa->Pleno = $request->input('Pleno');
            $siswa->save();
        }

        siswa::create($val);

        return redirect()->route('siswa')->with('success', 'ditambahkan');
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
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('Foto')) {
            $file = $request->file('Foto');
            $fileName = $request->input('Nama_Siswa') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $fileName);

            // Simpan nama file foto ke dalam kolom 'Foto' pada tabel siswa
            $siswa = new Siswa;
            $siswa->Foto = $fileName;
            $siswa->save();

        }
        return redirect()->back();

    }

    // public function showProfile($NIS)
    // {
    //     $profile = siswa::where('NIS', $NIS)->firstOrFail();

    //     return view('siswa.profile', compact('profile'));
    //     if ($profile) {
    //         return view('siswa.profile', compact('profile'));
    //     } else {
    //         return abort(404); // or redirect to an error page

    //     }
    // }
}