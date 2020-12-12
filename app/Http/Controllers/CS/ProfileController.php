<?php

namespace App\Http\Controllers\CS;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        return view('cs.profil', [
            'name' => Auth::user()->nama_user
        ]);
    }
}
