<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Models\cobacoba;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class CobacobaController extends Controller
{
    public function create(request $request)
    {
        cobacoba::create($request->all());
        return redirect()->back();
    }

    public function index()
    {
        $siswa = cobacoba::get();
        return view('cobacoba.index', compact('siswa'));
    }

    public function import()
    {
        Excel::import(new UsersImport, request()->file('file'));
        return redirect()->back();
    }
}

