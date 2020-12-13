<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\User;
use App\Models\Ruang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(auth()->user()->manajer==1){
            if($request->user==''){
                $jadwal = Jadwal::leftJoin('users','users.id','=','jadwal.id_user')
                                ->leftJoin('ruang','ruang.id','=','jadwal.id_ruang')
                                ->select('jadwal.*','users.nama_user','ruang.nama_ruang')
                                ->get();
                $cs = User::where('manajer',0)->orderBy('nama_user')->get();
                return view('manajer.jadwal', ['jadwal' => $jadwal, 'cs' => $cs]);
            } else{
                if($request->user == 'all'){
                    $jadwal = Jadwal::leftJoin('users','users.id','=','jadwal.id_user')
                                ->leftJoin('ruang','ruang.id','=','jadwal.id_ruang')
                                ->select('jadwal.*','users.nama_user','ruang.nama_ruang')
                                ->get();
                    $cs = User::where('manajer',0)->orderBy('nama_user')->get();
                    return view('manajer.jadwal', ['jadwal' => $jadwal, 'cs' => $cs,]);
                } else{
                    $jadwal = Jadwal::leftJoin('users','users.id','=','jadwal.id_user')
                                    ->leftJoin('ruang','ruang.id','=','jadwal.id_ruang')
                                    ->select('jadwal.*','users.nama_user','ruang.nama_ruang')
                                    ->where('jadwal.id_user', $request->user)
                                    ->get();
                    $cs = User::where('manajer',0)->orderBy('nama_user')->get();
                    return view('manajer.jadwal', ['jadwal' => $jadwal, 'cs' => $cs,]);
                }
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cs = User::where('manajer',0)->orderBy('nama_user')->get();
        $ruang = Ruang::leftJoin('jadwal','ruang.id','=','jadwal.id_ruang')
                                ->select('ruang.id','ruang.nama_ruang')
                                ->whereNull('jadwal.id')
                                ->get();
        return view('manajer.create-jadwal',['ruang' => $ruang, 'cs' => $cs,]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(auth()->user()->manajer==1){
            $request->validate([
                'user' => 'required',
                'ruang' => 'required',
            ]);
            $cs = DB::select("SELECT id FROM users WHERE nama_user = '$request->user'");
            $ruang = $request->ruangs;
            $r = explode(',', $ruang);
            for ($i=0; $i < $request->count_ruang ; $i++) { 
                $store = Jadwal::create([
                            'id_user' => $cs[0]->id,
                            'id_ruang' => $r[$i],
                        ]);
            }
            
            if($store){
                return redirect()->route('manajer.jadwal.index')
                                 ->with('success','Jadwal berhasil ditambahkan');
            } else{
                return redirect()->route('manajer.jadwal.index')
                                 ->with('failed','Jadwal gagal ditambahkan');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Jadwal::where('id', $id)->delete();
        if($delete){
            return redirect()->route('manajer.jadwal.index')
                             ->with('success','Jadwal berhasil dihapus');
        } else{
            return redirect()->route('manajer.jadwal.index')
                             ->with('failed','Jadwal gagal dihapus');
        }
    }
}
