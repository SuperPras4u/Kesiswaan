<?php

namespace App\Http\Controllers;

use App\Models\cobadetabs;
use App\Models\cobakelas;
use App\Models\cobasis;
use App\Models\pelanggaran;
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
        $cobasis = cobasis::all();
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
                        $absensi = cobadetabs::where('id_kelas', $kelasId)
                            ->where('tanggal_absen', $tanggal)
                            ->get();
                        // Tampilkan formulir cek absensi berdasarkan kelas, ID kelas, dan data absensi
                        return view('form.show_absensi', ['kelas' => $kelas, 'kelasId' => $kelasId, 'absensi' => $absensi, 'tanggal_absen' => $tanggal]);
                        break;

                    case 'absensi':
                        $tanggal_absen = date("Y-m-d");
                        $siswa = cobasis::where('id_kelas', $kelasId)
                            ->get();
                        // Tampilkan formulir absensi berdasarkan kelas, ID kelas, siswa, dan tanggal absen
                        return view('form.create_absensi', ['kelas' => $kelas, 'kelasId' => $kelasId, 'siswa' => $siswa, 'tanggal_absen' => $tanggal_absen]);
                        break;

                    case 'pelanggaran':
                        $siswa = cobasis::where('id_kelas', $kelasId)
                        ->get();
                        $pelanggaran = pelanggaran::all();
                        // Tampilkan formulir tindakan lain berdasarkan kelas dan ID kelas
                        return view('form.create_pelanggaran', ['kelas' => $kelas, 'kelasId' => $kelasId, 'siswa' => $siswa, 'pelanggaran' => $pelanggaran]);
                        break;
                    case 'showdata':
                        $siswa = cobasis::where('id_kelas', $kelasId)
                            ->get();
                        // Tampilkan formulir tindakan lain berdasarkan kelas dan ID kelas
                        return view('form.show_data', ['kelas' => $kelas, 'kelasId' => $kelasId, 'siswa' => $siswa]);
                        break;

                    // Tambahkan case untuk tindakan tambahan jika diperlukan

                    default:
                        // Tindakan tidak valid
                        return response('Tindakan tidak valid', 400);
                }
            }
        }
    }

}
