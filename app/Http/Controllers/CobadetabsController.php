<?php

namespace App\Http\Controllers;

use App\Models\cobaabs;
use App\Models\cobadetabs;
use App\Models\cobasis;
use App\Models\jadwal;
use Illuminate\Http\Request;

class CobadetabsController extends Controller
{
    public function absensi()
    {$tanggal_absen = date("l, d F Y");
        $cobadetabs = cobadetabs::all();
        $cobasis = cobasis::all();
        $cobaabs = cobaabs::all();
        $jadwal = jadwal::all();
        return view('cobadetabs.cobadetabs', compact('cobadetabs', 'cobasis', 'cobaabs', 'tanggal_absen', 'jadwal'));
    }

    public function atambahabsen(Request $request)
    {
        $data = $request->all();
         dd($request->all());
    //    $request->validate(cobadetabs::$rules);
        foreach ($request['id_siswa'] as $item => $value) {
            $absen = new cobadetabs;
            $absen->id_siswa = $data['id_siswa'][$item];
            $absen->tanggal_absen = $data['tanggal_absen'][$item];
            $absen->id_kelas = $data['id_kelas'][$item];
            $absen->id_mapel = $data['id_mapel'][$item];
            $absen->kehadiran = $data['kehadiran'][$item];
            $absen->save();
        }
        return redirect()->back();

    }

    public function uabsensi(){
        $absens = cobadetabs::all();

        return view('cobadetabs.ubahabsen', compact('absens'));
    }

    public function ubahabsen(Request $request)
    {
        $data = $request->all();
       
        if (!empty($request['id_siswa'])) {
        foreach ($request['id_siswa'] as $item => $value) {
            $absen = cobadetabs::find($data['id'][$item]); // Temukan data absen berdasarkan ID absen yang dikirimkan
            // dd($request->all());
            $absen->id_siswa = $data['id_siswa'][$item];
            $absen->tanggal_absen = $data['tanggal_absen'][$item];
            $absen->id_kelas = $data['id_kelas'][$item];
            $absen->jam1 = $data['jam1'][$item];
            $absen->jam2 = $data['jam2'][$item];
            $absen->jam3 = $data['jam3'][$item];
            $absen->jam4 = $data['jam4'][$item];
            $absen->jam5 = $data['jam5'][$item];
            $absen->jam6 = $data['jam6'][$item];
            $absen->jam7 = $data['jam7'][$item];
            $absen->jam8 = $data['jam8'][$item];
            $absen->jam9 = $data['jam9'][$item];
            $absen->jam10 = $data['jam10'][$item];
            $absen->save();
        }
    }
        return redirect()->back();
    }

    public function filter(Request $request)
{
    $tanggalFilter = $request->input('tanggal_filter');

    // Query data dengan filter tanggal
    $dataAbsensi = cobadetabs::whereDate('tanggal_absen', $tanggalFilter)->get();

    return view('absensi.filter', ['dataAbsensi' => $dataAbsensi]);
}


}
