<?php

namespace App\Http\Controllers\CS;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Bukti;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        // waktu 
        Carbon::setLocale('id');
        $time = Carbon::now()->formatLocalized("%A, %d %B %Y");

        // ambil jadwalnya dia
        $id = Auth::id();
        $jadwal = DB::table('jadwal')->where('id_user', $id)->get();

        return view('cs.dashboard', [
            'time' => $time,
            'jadwal' => $jadwal
        ]);
    }
}
