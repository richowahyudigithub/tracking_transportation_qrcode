<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Generate Qrcode Data Kendaraan</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row mt-5">
                <form class="form-inline" action="{{ route('store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                      <input type="text" class="form-control" name="name" placeholder="Masukkan url kendaraan">
                    </div>
                    <div class="form-group mb-2 ml-1">
                        <input type="text" class="form-control" name="nama sopir" placeholder="Masukkan nama sopirl">
                      </div>
                      <div class="form-group mb-2 ml-1">
                        <input type="number" class="form-control" name="phone" placeholder="Masukkan Nomor Telepone">
                      </div>
                    <button type="submit" class="btn btn-primary ml-1 mb-2">Create</button>
                  </form>
                <br>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Alamat url</th>
                        <th scope="col">Nama Sopir</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">QR code</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($data as $data)
                     <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->nama_sopir }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>
                            <a href="{{ route('generate',$data->id) }}" class="btn btn-primary">Generate</a>
                        </td>
                      </tr>
                     @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>