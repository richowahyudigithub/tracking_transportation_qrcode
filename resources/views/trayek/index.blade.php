@extends('template')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>DATA TRAYEK ANGKUTAN UMUM</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ url('tambah_trayek') }}"> Tambah Kendaraan</a>
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
            <th>Nama Sopir</th>
            <th>Nomor Kendaraan</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($data as $kendaraan)
        <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
            <td>{{ $kendaraan->nama_sopir }}</td>
            <td>{{ $kendaraan->no_polisi }}</td>
            <td class="text-center">
                <form action="{{ url('trayek.destroy',$kendaraan->id) }}" method="POST">
 
                    <a class="btn btn-info btn-sm" href="{{url('show_trayek',array($kendaraan->id))}}">Show</a>
 
                    <a class="btn btn-primary btn-sm" href="{{ url('trayek.edit',$kendaraan->id) }}">Edit</a>
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
   
@endsection