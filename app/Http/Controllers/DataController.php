<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Data;

class DataController extends Controller
// class GenerateController extends Controller
{
    public function index(){
        $data = Data::all();
        return view ('create_qrcode', ['data' => $data]);
    }
    public function store(Request $request){
        $data = new Data;
        $data->name = $request->name;
        $data->nama_sopir = $request->nama_sopir;
        $data->phone = $request->phone;
        $data->save();
        return back();
    }
    public function generate ($id)
    {
        $data = Data::findOrFail($id);
        $qrcode = QrCode::size(400)->generate($data->name);
        return view('qrcode',compact('qrcode'));
    }
}