<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index() {
        return view('login');
    }

    public function login(Request $request) {
        // dd($request->all());
        $data = User::where('email', $request->email)->firstOrFail();
        if ($data) {
            if (Hash::check($request->password,$data->password)) {
                session(['berhasil_login' => true]);
                return redirect('/dashboard');
            }
            return redirect('/')->with('message', 'Email atau Password Salah');
        }
    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect('/');
    }



}
