<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\trafficlight;
use DB;

class TrafficLightController extends Controller
{
    public function index()
    {
        $data = trafficlight::all();
        return view('trafficlight.index', compact('data'));
    }

    public function create()
    {
        return view('trafficlight.create');
    }

    public function store(Request $request) {
        $data = new trafficlight();
        $data->nama_traffic=$request->get('nama_traffic');
        $data->nama_jl=$request->get('nama_jl');
        $data->save();
        return redirect ('traffic_lights');
    }

    public function show($id) {
        $data = trafficlight::Find($id);
        return view ('trafficlight.show', compact('data'));
    }
       
}
