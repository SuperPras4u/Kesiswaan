<?php

namespace App\Http\Controllers;

use App\Models\cobadetabs;
use App\Models\cobakelas;
use App\Models\cobasis;
use Illuminate\Http\Request;

class CobakelasController extends Controller
{
    public function cobakelas()
    {$tanggal_absen = date("l, d F Y");
        $cobakelas = cobakelas::all();
        return view('cobakelas.cobakelas', compact('cobakelas', 'tanggal_absen'));
    }

    public function tambahcobakelas(Request $request)
    {
        // dd($request->all());
        cobakelas::create($request->all());
        return redirect()->back();
    }

    public function detailsiswa($nama_siswa)
    {
        $datasiswa = cobasis::where('nama_siswa', $nama_siswa)
            ->with('absensi')->with('pelanggaran')
            ->first();

        return view('cobakelas.detailsiswa', [
            'datasiswa' => $datasiswa,
        ]);
    }

    public function siswaabsensi($id)
    {
        $dataabsen = cobakelas::with('cobasiswa')->where('id', $id)->first();
        $tanggal_absen = date("Y-m-d");
        return view('cobadetabs.cobadetabs', [
            'tanggal_absen' => $tanggal_absen,
            'dataabsen' => $dataabsen,

        ]);
    }

    public function siswafilterabsensi(Request $request, $id)
    {
        $date = $request->date;

        $dataabsen = cobakelas::with(['cobasiswa' => function ($query) use ($date) {
            $query->whereHas('cobadetabs', function ($query) use ($date) {
                $query->where('tanggal', $date);
            });
        }])
            ->where('id', $id)
            ->first();
        $datakelas = cobakelas::with('cobasiswa')->where('id', $id)->first();
        $tanggal_absen = date("Y-m-d");

        // Filter absensi berdasarkan tanggal
        $filteredData = $dataabsen->cobasiswa->where('tanggal', $date)->all();

        return view('cobadetabs.ubahabsen', [
            'dataabsen' => $dataabsen,
            'datakelas' => $datakelas,
            'tanggal_absen' => $tanggal_absen,
            'filteredData' => $filteredData,
        ]);
    }

    public function siswacekabsensi($id)
    {
        $dataabsen = cobakelas::with('cobasiswa')->where('id', $id)->get();
        $datakelas = cobakelas::with('cobasiswa')->where('id', $id)->first();
        $tanggal_absen = date("Y-m-d");
        return view('cobadetabs.ubahabsen', [
            'dataabsen' => $dataabsen,
            'datakelas' => $datakelas,
            'tanggal_absen' => $tanggal_absen,

        ]);
    }

    public function filterByDate(Request $request)
    {
        $tanggal = $request->input('tanggal');
        $absen = cobadetabs::whereDate('tanggal_absen', $tanggal)->get();

        return view('cobadetabs.filtertanggal', compact('absen'));
    }

}
