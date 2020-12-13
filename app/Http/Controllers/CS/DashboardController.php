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

    public function store(Request $request){
        // validasi dulu
        $this->validate($request, [
            'bukti1' => 'required',
            'bukti1.' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('bukti1')){
            foreach($request->file('bukti1') as $image){
                $name = $image->getClientOriginalName();
                $image->move(public_path().'/uploads', $name);
                $data = $name;
            }
        }

        $bukti_model = new Bukti;
        $bukti_model->filename = json_encode($data);
        $bukti_model->save();
        return back()->with('success', 'Sudah berhasil diupload');

    }
}
