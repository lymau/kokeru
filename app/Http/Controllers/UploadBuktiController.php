<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class UploadBuktiController extends Controller
{
    public function index($id){
        Carbon::setLocale('id');
        $time = Carbon::now()->formatLocalized("%A, %d %B %Y");

        dd($id);

        return view('cs.upload_bukti', ['time' => $time, 'id_ruang' => $id_ruang]);
    }

    public function store(){

    }
}
