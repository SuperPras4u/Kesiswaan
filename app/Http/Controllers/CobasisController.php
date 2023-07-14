<?php

namespace App\Http\Controllers;

use App\Models\ClassKelas;
use App\Models\cobadetabs;
use App\Models\cobakelas;
use App\Models\cobasis;
use App\Models\jadwal;
use App\Models\pelanggaran;
use App\Models\siswa;
use Illuminate\Http\Request;

class CobasisController extends Controller
{
    public function cobases()
    {
        $cobasis = cobasis::all();
        $kelas = cobakelas::all();
        return view('cobases.cobases', compact('cobasis', 'kelas'));
    }

    public function tambahcobases(Request $request)
    {
        //dd($request->all());
        cobasis::create($request->all());
        return redirect()->back();
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $data = cobasis::where('nama_siswa', 'like', '%' . $request->search . '%')->get();
            $output = '';
            if (count($data) > 0) {
                $output = '
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Violation</th>
                        </tr>
                    </thead>
                    <tbody>';

                foreach ($data as $item) {
                    $output .= '
                    <tr>
                        <td>' . $item->nama_siswa . '</td>
                        <td>' . $item->nama_siswa . '</td>
                    </tr>';
                }

                $output .= '</tbody>
                </table>';
            } else {
                $output .= 'No Result';
            }

            return $output;
        }
    }

    public function tampil()
    {
        $cobasis = siswa::all();
        $kelass = cobakelas::all();
        return view('pelanggaran.tampil', compact('cobasis', 'kelass'));
    }

    public function process(Request $request)
    {
        if ($request->ajax()) {
            $kelasId = $request->kelasId;
            $tindakan = $request->tindakan;
            $tanggal = $request->tanggal;

            if ($kelasId && $tindakan) {
                $kelas = cobakelas::find($kelasId);

                switch ($tindakan) {
                    case 'cek_absensi':
                        $absensi = cobadetabs::where('kelas_id', $kelasId)
                            ->where('tanggal_absen', $tanggal)
                            ->get();
                        // Tampilkan formulir cek absensi berdasarkan kelas, ID kelas, dan data absensi
                        return view('form.show_absensi', ['kelas' => $kelas, 'kelasId' => $kelasId, 'absensi' => $absensi, 'tanggal_absen' => $tanggal]);
                        break;

                    case 'absensi':
                        $tanggal_absen = date("Y-m-d");
                        $tanggal = date("l, d F Y");
                        $jadwal = jadwal::all();
                        $siswa = siswa::where('kelas_id', $kelasId)
                            ->get();
                        // Tampilkan formulir absensi berdasarkan kelas, ID kelas, siswa, dan tanggal absen
                        return view('form.create_absensi', ['kelas' => $kelas, 'kelasId' => $kelasId, 'siswa' => $siswa, 'tanggal_absen' => $tanggal_absen, 'tanggal' => $tanggal, 'jadwal' => $jadwal]);
                        break;

                    case 'pelanggaran':
                        $siswa = siswa::where('kelas_id', $kelasId)
                            ->get();
                        $pelanggaran = pelanggaran::all();
                        // Tampilkan formulir tindakan lain berdasarkan kelas dan ID kelas
                        return view('form.create_pelanggaran', ['kelas' => $kelas, 'kelasId' => $kelasId, 'siswa' => $siswa, 'pelanggaran' => $pelanggaran]);
                        break;
                    case 'showdata':
                        $siswa = siswa::where('kelas_id', $kelasId)
                            ->get();
                        // Tampilkan formulir tindakan lain berdasarkan kelas dan ID kelas
                        return view('form.show_data', ['kelas' => $kelas, 'kelasId' => $kelasId, 'siswa' => $siswa]);
                        break;
                    case 'kenaikan':
                        $siswa = siswa::where('id_kelas', $kelasId)->get();
                        $tingkatan = $kelas->identitas;
                        $datakelas = '';
    
                        if ($tingkatan == '10') {
                            $datakelas = ClassKelas::where('identitas', '11')->get();
                        } elseif ($tingkatan == '11') {
                            $datakelas = ClassKelas::where('identitas', '12')->get();
                        }
    
                        // Tampilkan formulir tindakan lain berdasarkan kelas, ID kelas, siswa, dan kelas berikutnya
                        return view('form.kenaikan-siswa', [
                            'kelas' => $kelas,
                            'kelasId' => $kelasId,
                            'siswa' => $siswa,
                            'datakelas' => $datakelas
                        ]);
                        break;

                    // Tambahkan case untuk tindakan tambahan jika diperlukan

                    default:
                        // Tindakan tidak valid
                        return response('Tindakan tidak valid', 400);
                }
            }
        }
    }

    public function kenaikan(Request $request)
    {
        $data = $request->all();
       
        if (!empty($request['id'])) {
        foreach ($request['id'] as $item => $value) {
            $datasiswa = siswa::find($data['id'][$item]); // Temukan data absen berdasarkan ID absen yang dikirimkan
            // dd($request->all());
            $datasiswa->id = $data['id'][$item];
            $datasiswa->id_kelas = $data['id_kelas'][$item];
            $datasiswa->save();
        }
    }
    return redirect()->back();
}


    public function alumni(){
        return view('cobases.alumni');
    }
    
    
}


