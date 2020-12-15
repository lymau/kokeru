<?php

namespace App\Http\Controllers;

use App\Models\Bukti;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UploadBuktiController extends Controller
{
    public function index($id){
        Carbon::setLocale('id');
        $time = Carbon::now()->formatLocalized("%A, %d %B %Y");

        return view('cs.upload_bukti', ['time' => $time, 'id_ruang' => $id]);
    }

    public function store(Request $request){        
        $idlap = 1;
        if($request->hasFile('foto'))
        {   
            $allowedfileExtension=['pdf','jpg','png','docx'];
            $files = $request->file('foto');
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                //dd($check);
                if($check)
                {
                    
                    foreach ($request->foto as $photo) {
                        $filename = time()."_".$photo->getClientOriginalName();
                        Bukti::create([
                            'id_laporan' => $idlap,
                            'nama_file' => $filename
                            ]);
                            $tujuan = 'data_file';
                            $photo->move($tujuan,$filename);
                        }
                        echo "Upload foto berhasil";
                    }
                    else
                    {
                        echo '<div class="alert alert-warning"><strong>Warning!</strong> Foto tidak sesuai format</div>';
                    }
                }
            }
            
        $videofileExtension=['mp4','mkv','mpeg','docx'];
        $video = $request->file('video');
        $filename = time()."_".$video->getClientOriginalName();
        $extension = $video->getClientOriginalExtension();
        $check=in_array($extension,$videofileExtension);
        if($check){
            Bukti::create([
                'id_laporan' => $idlap,
                'nama_file' => $filename
                ]);
            $tujuan = 'data_file';
            $video->move($tujuan,$filename);
            echo "Upload Video Berhasil";
        }
        else{
            echo '<div class="alert alert-warning"><strong>Warning!</strong> Video tidak sesuai format</div>';
        }

    }
}
