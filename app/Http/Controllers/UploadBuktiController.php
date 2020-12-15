<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class UploadBuktiController extends Controller
{
    public function index($id_ruang){
        Carbon::setLocale('id');
        $time = Carbon::now()->formatLocalized("%A, %d %B %Y");

        return view('cs.upload_bukti', ['time' => $time, 'id_ruang' => $id_ruang]);
    }

    public function store(Request $request){
        // validasi dulu
        $request->validate([
            'foto' => 'required',
            'foto.*' => ['required', 'mimetypes:image/*', 'max:2048'],
            'video' => ['mimetypes:video/*', 'max:10240']
        ]);

        if ($request->hasFile('foto')){
            if (count($request->file('foto')) > 5){
                return redirect()->back()->withErrors('Hanya boleh mengupload 5 file.');
            }

            foreach($request->file('foto') as $file){
                $data[] = $file->store('uploads','public');
            }

            dd($data);
        }
    }
}
