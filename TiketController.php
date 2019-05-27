<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TiketController extends Controller
{
    public function index(){
        //ambil data dari tabel tiket
        $tiket = DB::table('tiket')->get();

        //kirim data tiket ke view index
        return view('index',['tiket'=> $tiket]);
    }
    public function tambah(){
        //membanggil view tamba
        return view('tambah');
    }
    //method untuk insert data ke tabel tiket
    public function store(Request $req){
        //insert data ke tabel tiket
        DB::table('tiket')->insert([
            'kd_tiket'=> $req->kode,
            'tujuan' => $req->tujuan,
            'tanggal' => $req->tanggal,
            'pesawat' => $req->pesawat
        ]);
        return redirect('/tiket');
    }
}
