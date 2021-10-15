<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penumpangs;

class FullTextSearchController extends Controller
{
    public function search(Request $request)
    {
        if($request->has('search')){
            $data = Penumpangs::search($request->get('search'))->get();  
        }else{
            $data = Penumpangs::get();
        }
        return view('penumpang.index', compact('$data'));
    }    
}
