<?php

namespace App\Http\Controllers;

use App\Models\cobaabs;
use Illuminate\Http\Request;

class CobaabsController extends Controller
{
    public function cobaabs()
    {
        $cobaabs = cobaabs::all();
        return view('cobaabs.cobaabs', compact('cobaabs'));
    }

    public function tambahcobaabs(Request $request)
    {
        //dd($request->all());
        cobaabs::create($request->all());
        return redirect()->back();
    }
}
