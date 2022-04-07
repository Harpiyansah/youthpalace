<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authenticate(Request $request)
     {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        $validationData = Admin::where('email', $request->email)->where('password', $request->password)->first();
        // dd($validationData);
        if ($validationData) {
            $request->session()->regenerate();
 
            return redirect()->intended('/admin');
        }

        return back()->with('loginError', 'Login Gagal!');
     }
}
