<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){
        $manajer = Auth::user();

        return view('manajer.profil', ['manajer' => $manajer]);
    }

    public function store(Request $request){

        $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed'
        ]);

        $id = auth()->user()->id;

        $pass = Hash::check($request->password, auth()->user()->password);

        if ($pass){
            $store = User::where('id', $id)
            ->update([
                'nama_user' => $request->nama,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);
            if ($store){
                return redirect()->route('manajer.profil')->with('success', 'Data Anda berhasil diperbarui');
            } else {
                return redirect()->route('manajer.profil')->with('failed', 'Data Anda gagal diperbarui');
            }
        }
        else {
            return redirect()->route('manajer.profil')->with('failed', 'Password tidak sama!');
        }
    }
}
