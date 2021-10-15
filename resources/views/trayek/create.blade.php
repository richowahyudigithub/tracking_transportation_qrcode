@extends('template')
 
@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Tambah Data Kendaraan</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ url('trayeks') }}"> Back</a>
        </div>
    </div>
</div>
 
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Ada yang salah dengan inputan anda.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<form action="{{ url('insert_trayek') }}" method="POST">
    @csrf
 
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama_sopir" class="form-control" placeholder="Nama Sopir">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kendaraan:</strong>
                <input type="text" name="jenis_kendaraan" class="form-control" placeholder="Jenis Kendaraan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Polisi:</strong>
                <input type="text" name="no_polisi" class="form-control" placeholder="Nomor polisi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Telepon:</strong>
                <input type="text" name="no_telp" class="form-control" placeholder="Nomor Telepon">
            </div>
        </div>
        
        <div class="form-group" >
         <input type="submit" name="send" id="send" value="Simpan" class="btn btn-success">{!!csrf_field()!!}                       
        </div>
    </div>
 
</form>
@endsection