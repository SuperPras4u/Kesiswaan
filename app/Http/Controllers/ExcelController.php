<?php

namespace App\Http\Controllers;

use App\Exports\SiswaExport;
use App\Imports\siswaImport;
use App\Models\ClassKelas;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ExcelController extends Controller
{
   
    public function import(Request $request)
    {
        $file = $request->file('file');
        $kelasId = $request->input('kelas_id'); // Ambil ID kelas dari inputan form atau sesuaikan dengan kebutuhan Anda
        $import = new siswaImport($kelasId);
        Excel::import($import, $file);
        return redirect()->back();
        // return 'Import berhasil!';
    }

    public function exportSiswa(Request $request)
    {
        $kelasId = $request->input('kelas_id');
        $kelas = ClassKelas::findOrFail($kelasId);
        $namaFile = 'siswa_' . $kelas->Nama_Kelas . '.xlsx';

        $export = new SiswaExport($kelasId);
        return Excel::download($export, $namaFile);
    }
    
}



