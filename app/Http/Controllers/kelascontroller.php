<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use App\Models\kelas;
use Illuminate\Http\Request;

class kelascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelass = kelas::all();
        $juru = jurusan::all();
        return view('Kelas.index', [
            'kelass' => $kelass,
            'juru' => $juru,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}