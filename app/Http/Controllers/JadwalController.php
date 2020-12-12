<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    public function index(){
        Carbon::setLocale('id');
        $time = Carbon::now()->formatLocalized("%A, %d %B %Y");

        return view('manajer.jadwal', [
            'time' => $time
        ]);
    }

    public function add(){
        // waktu
        Carbon::setLocale('id');
        $time = Carbon::now()->formatLocalized("%A, %d %B %Y");
        $month = now()->month;

        // ruang
        $ruang = DB::table('ruang')->get();

        // cs
        $cs = DB::table('users')->where('manajer', 'false')->get();

        return view('manajer.jadwal_add', [
            'time' => $time,
            'ruang' => $ruang,
            'cs' => $cs,
            'month' => $month
        ]);
    }

    public function store(Request $request){
        // validasi
        
    }
}
