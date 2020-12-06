<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(){
        return view('auth.login');
    }

    public function store(Request $request) {
        // validation
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // sign the user in
        if (auth()->attempt($request->only('email', 'password'))){
            // if he's manajer
            if (auth()->user()->manajer){
                return redirect()->route('manajer.dashboard');
            }
            return redirect()->route('cs.dashboard');
        }
        return back()->with('status', 'Anda belum mempunyai akun');
    }
}
