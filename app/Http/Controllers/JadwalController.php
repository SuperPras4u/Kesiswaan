<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function jadwal()
    {
        $jadwal = jadwal::all();
        return view('jadwal.jadwal', compact('jadwal'));
    }

    public function createjadwal(Request $request)
    {
        // dd($request->all());
        jadwal::create($request->all());
        return redirect()->back();
    }
}
