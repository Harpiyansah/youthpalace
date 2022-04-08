<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        $kamar = Kamar::all();
        $fasilitas = Fasilitas::all();
        // dd($kamar);
        return view('admin', compact('kamar', 'fasilitas'));
    }

    public function home()
    {
        $kamar = Kamar::all();
        $fasilitas = Fasilitas::all();
        return view('dashboard', compact('kamar', 'fasilitas'));
    }

    public function edit($id)
    {
        $item = Kamar::where('id', $id)->first();
        return view('edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Kamar::where('id', $id)->first();
        $item->update($request->all());

        return redirect('/admin');
    }

    public function destroy($id)
    {
        $item = Kamar::where('id', $id)->first();
        $item->delete();

        return redirect('/admin');
    }
}
