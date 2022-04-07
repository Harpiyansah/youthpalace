<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('admin', compact('fasilitas'));
    }
}