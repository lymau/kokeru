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
            'foto' => 'required',
            'foto.*' => ['required', 'mimetypes:image/*', 'max:2048'],
            'video' => ['mimetypes:video/*', 'max:2048']
        ]);
        dd($request);

        if ($request->hasFile('foto')){
            foreach($request->file('foto') as $key => $file){
                $path = $file->store('/assets/uploads', 'public');
                $name = $file->getClientOriginalName();

                $insert[$key]['name'] = $name;
                $insert[$key]['path'] = $path;
            }
        }
        
        // $laporan_model = new Laporan;
        // $laporan_model->store()
        // $bukti_model = new Bukti;
        // $bukti_model->nama_file = json_encode($insert);
        // $bukti_model->save();
        // return back()->with('success', 'Sudah berhasil diupload');

    }
}
