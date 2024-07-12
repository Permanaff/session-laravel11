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
                return redirect('/dashboard');
            }
            return redirect('/')->with('massage', 'Email atau Password Salah');
        }
    }

}
