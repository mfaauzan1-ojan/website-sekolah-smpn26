<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>Hello world!</title>
  </head>
  <body>
    <h1>Hello world!</h1>

    <div class="container">
    <a href="/tambahberita" button type="button" class="btn btn-success">tambah</a>
        <div class="row">
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            @endif
            </div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Judul</th>
      <th scope="col">Isi</th>
      <th scope="col">foto</th>
      <th scope="col">Dibuat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php
        $no = 1;
    @endphp
    @foreach ($data as $row)
    <tr>
      <th scope="row">{{ $no++}}</th>
      <td>{{ $row->nama }}</td>
      <td>{{ $row->judul }}</td>
      <td>{{ $row->isi }}</td>
      <td>
        <img src="{{ asset('fotoberita/'.$row->foto) }}" alt="" style="max-width: 40px;">
      </td>
      <td>{{ $row->created_at->format('D M Y') }}</td>
      <td>
            <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">edit</a>
            <a href="/delete/{{ $row->id }}" class="btn btn-danger">delete</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    -->
  </body>
</html>