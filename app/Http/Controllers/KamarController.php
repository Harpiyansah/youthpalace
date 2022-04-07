<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Fasilitas;

class KamarController extends Controller
{
    public function index()
    {
        $kamar = Kamar::all();
        $fasilitas = Fasilitas::all();
        // dd($kamar);
        return view('admin', compact('kamar', 'fasilitas'));
    }
}