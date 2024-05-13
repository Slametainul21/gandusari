<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Tanaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body class="bg-light">
  <h1 class="text-center">Data Tanaman</h1>
    <main class="container">
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='tambah' class="btn btn-primary">+ Tambah Data</a>
                </div>
                @if ($massage = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{$massage}}
                </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">id</th>
                            <th class="col-md-2">Nama</th>
                            <th class="col-md-2">Asal</th>
                            <th class="col-md-2">foto</th>
                            <th class="col-md-2">Deskripsi</th>
                            <th class="col-md-2">Jumlah</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      @php
                        $no = 1;
                      @endphp

                      @foreach ($data as $row )
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->asal }}</td>
                            <td>
                              <img src="{{ asset('fototanaman/'.$row->foto) }}" alt="" style="width: 40px;">
                            </td>
                            <td>{{ $row->Deskripsi }}</td>
                            <td>{{ $row->jumlah }}</td>
                            <td>
                                <a href="/editdata/{{ $row->id }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/delete/{{ $row->id }}" class="btn btn-danger btn-sm">Del</a>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
               
          </div>
          <!-- AKHIR DATA -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>