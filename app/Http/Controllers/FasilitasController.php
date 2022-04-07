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
    
    public function dashboard()
    {
        $fasilitas = Fasilitas::all();
        return view('dashboard', compact('fasilitas'));
    }
}