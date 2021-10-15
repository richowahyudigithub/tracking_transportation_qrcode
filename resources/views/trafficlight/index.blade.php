@extends('template')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>DATA TRAFFIC LIGHT DISHUB BANYUWANGI</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ url('create_trafficlight') }}"> Tambah Traffic Light</a>
            </div>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <!-- <th width="20px" class="text-center">No</th> -->
            <th class="text-center">No</th>
            <th>Nama Traffic</th>
            <th>Nama Jalan</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($data as $traffic)
        <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
            <td>{{ $traffic->nama_traffic }}</td>
            <td>{{ $traffic->nama_jl }}</td>
            <td class="text-center">
                <form action="{{ url('trayek.destroy',$traffic->id) }}" method="POST">
 
                    <a class="btn btn-info btn-sm" href="{{url('show_trafficlight',array($traffic->id))}}">Show</a>
 
                    <a class="btn btn-primary btn-sm" href="{{ url('trayek.edit',$traffic->id) }}">Edit</a>
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
   
@endsection