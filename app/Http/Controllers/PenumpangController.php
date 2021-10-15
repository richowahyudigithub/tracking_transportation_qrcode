<?php

namespace App\Http\Controllers;
use App\Penumpangs;
use App\Trayeks;
use DB;

use Illuminate\Http\Request;


class PenumpangController extends Controller
{
    public function insert(Request $request){

        // $this -> validate($request, [
        //     'nama' => 'required',
        //     'sift' => 'required'
        // ]);


        $data=new Penumpangs();
        $data->id_trayek=$request->get('id_trayek');
        $data->nama=$request->get('nama');
        $data->alamat=$request->get('alamat');
        $data->no_telp=$request->get('no_telp');
        $data->sift=$request->get('sift');
        $data->save();
        return redirect ('sukses');
    }

    public function index() {
        $data=Penumpangs::all();
        return view('penumpang.index', compact('data'));
    }

    
     public function succes() {
        // $data=Penumpangs::all();
        return view('penumpang.sukses');
    }

    public function search(Request $request)
{
	$q = $request->input('query');
	 
	$data = Penumpangs::whereRaw(
	        "MATCH(title) AGAINST(?)", 
	        array($q)
	)->get();
	 
	return view('penumpang.index', compact('data'));
}
}
