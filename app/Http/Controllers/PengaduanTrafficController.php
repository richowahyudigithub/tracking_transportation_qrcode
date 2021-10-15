<?php

namespace App\Http\Controllers;

use App\pengaduan;
use App\trafficlight;
use DB;
use Illuminate\Http\Request;

class PengaduanTrafficController extends Controller
{

    public function insert(Request $request)
    {
        $data = new pengaduan();
        $data->id_trafficlight=$request->get('id_trafficlight');
        $data->nama_pengadu=$request->get('nama_pengadu');
        $data->alamat=$request->get('alamat');
        $data->no_telp=$request->get('no_telp');
        $data->deskripsi=$request->get('deskripsi');
        $data->kategori=$request->get('kategori');
        $data->save();
        return redirect('pengaduan_sukses');
    }
    public function index()
    {
        $data=pengaduan::all();
        return view('pengaduan_trafficlight.index', compact('data'));
    }

    public function succes() {
        // $data=Penumpangs::all();
        return view('pengaduan_trafficlight.sukses');
    }
}
