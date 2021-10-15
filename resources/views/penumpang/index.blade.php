@extends('template')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <!-- Datatable Dependency start -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js"></script>
@section('content')


    <!-- Datatable Dependency end -->


   <div class="container">

        <div class="col-md-12">
            <div class="card">

                <div class="card-header">
                    <h4>Data Penumpang </h4>
                </div>

                <div class="card-body">

                    <table class="table table-bordered table-hover" id="table_id">
                        <thead>
                            <tr>
                                <th data-priority="1">No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No Telpon</th>
                                <th>Trayek</th>
                                <th>Tanggal</th>
                                <th>Sift</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $penumpang)
                            <tr>
                                
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $penumpang->nama }}</td>
                            <td>{{ $penumpang->alamat }}</td>
                            <td>{{ $penumpang->no_telp }}</td>
                            <td>{{ $penumpang->trayeks->nama_sopir }} {{$penumpang->trayeks->jenis_kendaraan}}</td>
                            <td>{{ $penumpang->created_at }}</td>
                            <td>{{ $penumpang->sift }}</td>
                            </tr>

    @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>

    </div>

    <style> 
        body {
            background-color: #F1F4F5;
        }
        
        .card-header {
            padding: 0.2rem 1.25rem;
            /* margin-bottom: 0; */
            background-color: #ffffff;
            border-bottom: 0px;
        }
        
        .card-body {
            padding: 0rem 1.25rem;
        }
        
        p {
            margin-top: 0;
            margin-bottom: 10px;
        }
        
        .card {
            border-radius: 0px;
            padding-top: 15px;
            padding-bottom: 15px;
        }
        
        .flex-wrap {
            margin-bottom: -35px;
        }
        
        div.dataTables_wrapper div.dataTables_paginate {
            margin-top: -25px;
        }
        
        .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            background-color: #5D78FF;
            border-color: #5D78FF;
        }
</style>
<script>
  $(document).ready(function() {
            $('#table_id').DataTable({

                dom: 'Bfrtip',
                responsive: true,
                pageLength: 60,
                // lengthMenu: [0, 5, 10, 20, 50, 100, 200, 500],

                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]

            });
        });
        </script>

 
@endsection