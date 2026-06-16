<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Pengumuman </title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    {{-- /* bootstrap */ --}}
    <link href="{{ asset('path/to/bootstrap.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    @include('partials.navboot')
<div class="intro">
 <div class="judul" style="text-align: center;">
  <p>Berita & Pengumuman</p>
 </div>
</div>

<!-- <div class="dataguru">
    <div class="row" id="guru">
    <h1 style="justify-content: center; display: flex"><strong>Guru & Staff</strong></h1>
    @foreach ($data as $row)      
                        <div class="col-sm-3 " >
                          
                            <div class="gambaradmin">
                                  <div class="gambarcrud">
                                    <img src="{{ asset('fotoberita/'.$row->foto) }}" class="card-img-top" style="max-height: 280px; width: 240px;" alt="Gambar Anda" class="gambar">
                                  </div> 
                            </div>
                            <table class="news">
                              @csrf
                                <tr>
                                    <td><h6>{{ $row->created_at->format('D M Y') }}</h6></td>
                                </tr>
                                <tr>
                                    <td>{{ $row->nama }}</td>
                                </tr>
                                <tr>
                                <td>{{ $row->judul }}</td>
                                </tr>
                                <tr>
                                <td>
                                    <p>{{ Str::limit($row->isi, 100) }}</p>
                                    <a href="#" class="read-more">Read more</a>
                                    <p class="full-text">{{ $row->isi }}</p>
                                </td>
                                </tr>
                            </table>
                        </div>
                        @endforeach
    </div>
</div> -->

@foreach ($data as $row)
<div class="beritbaru" style="padding-left:10%; padding-bottom: 1%">
<div class="card mb-3" style="width: 80%;">
  <img src="{{ asset('fotoberita/'.$row->foto) }}" class="card-img-top" alt="..." style="max-height: 280px;">
  <div class="card-body">
    <h5 class="card-title">{{ $row->judul }}</h5>
    <p class="card-text">{{ $row->nama }}</p>
    <p>{{ ($row->isi) }}</p>
    <p class="card-text"><small class="text-body-secondary">{{ $row->created_at->format('D M Y') }}</small></p>
  </div>
</div>
</div>
@endforeach

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $(".read-more").click(function () {
            var post = $(this).closest(".news");
            post.find(".full-text").slideToggle();
        });
    });
</script>
</body>
</html>