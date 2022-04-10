<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

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
    
    public function edits($id)
    {
        $item = Fasilitas::where('id', $id)->first();
        return view('edits', compact('item'));
    }

    public function updates(Request $request, $id)
    {
        // dd($request->all());
        $item = Fasilitas::where('id', $id)->first();
        $item->update($request->all());

        return redirect('/admin');
    }

    public function destroys($id)
    {
        $item = Fasilitas::where('id', $id)->first();
        $item->delete();

        return redirect('/admin');
    }
}