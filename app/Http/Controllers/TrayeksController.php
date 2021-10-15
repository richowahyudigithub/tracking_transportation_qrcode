<?php

namespace App\Http\Controllers;
use App\Trayeks;
use DB;

use Illuminate\Http\Request;

class TrayeksController extends Controller
{
    public function index(){
        $data=Trayeks::all();
        return view('trayek.index', compact('data'));
    }

    public function create(){
        return view('trayek.create');
    }

    public function insert(Request $request){
        
        $data=new Trayeks();
        $data->nama_sopir=$request->get('nama_sopir');
        $data->jenis_kendaraan=$request->get('jenis_kendaraan');
        $data->no_polisi=$request->get('no_polisi');
        $data->no_telp=$request->get('no_telp');
        $data->save();
        return redirect ('trayeks');
    }

    public function show($id){
        $data=Trayeks::Find($id);
        return view('trayek.show', compact('data'));
    }
}
