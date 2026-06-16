<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Tentangkami </title>
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
 <div class="judul">
  <h2>Profil Sekolah  </h2>
  <div class="container" style="width: 25rem; justify-content: center; align-items: center; border: none;">
  <img src="images/sekolahsmpn26.png" class="card-img-top" style="border-radius: 5%; text-align: center;">
  </div>
 </div>
</div>

<div class="extrakulikuler">
<div class="organisasi" id="ekstrakulikuler">
  <h2><strong>Kegiatan Extrakulikuler SMPN 26 Pontianak</strong></h2>
</div>
<div class="struktur">
  <h3><br>Pasukan Pengibar Bendera <br> (Paskibra) <br> 
  Paskibra adalah singkatan dari "Pasukan Pengibar Bendera" atau "Paskibraka." <br>Ini adalah kelompok siswa atau siswi yang secara khusus dilatih untuk <br> mengibarkan dan menurunkan bendera negara (Merah Putih) dalam <br>upacara-upacara resmi.</h3>
  <div class="carddd" style="width: 28rem; padding-left: 7%;">
  <img src="images/paskibra.jpeg" class="card-img-top" style="border-radius: 5%; text-align: center;">
  </div>
</div>
<div class="strukturr">
  <div class="carddd" style="width: 28rem; padding-right: 7%;">
  <img src="images/pramuka.jpeg" class="card-img-top" style="border-radius: 5%; text-align: center;">
  </div>
  <h3><br>Praja Muda Karana <br> (Pramuka) <br>
  Pramuka adalah gerakan pendidikan yang bertujuan untuk membina potensi <br>anak muda melalui kegiatan-kegiatan pendidikan di alam terbuka. Pramuka <br>memiliki prinsip-prinsip dasar seperti kesetiaan, kemanusiaan, dan <br>kejujuran, serta mempromosikan nilai-nilai seperti kemandirian, <br>kerjasama, dan kepedulian terhadap lingkungan. </h3>
</div>
<div class="struktur">
  <h3><br>Palang Merah Remaja <br> (PMR) <br> 
  PMR adalah singkatan dari "Palang Merah Remaja." Ini adalah organisasi <br>sukarela yang terutama terkait dengan penyelamatan jiwa dan bantuan <br>kemanusiaan dalam situasi darurat. PMR biasanya terdiri dari siswa-siswi <br> yang dilatih untuk memberikan pertolongan pertama.</h3>
  <div class="carddd" style="width: 28rem; padding-left: 7%;">
  <img src="images/pmr.jpeg" class="card-img-top" style="border-radius: 5%; height: 14rem; text-align: center;">
  </div>
</div>
<div class="strukturr">
  <div class="carddd" style="width: 28rem; padding-right: 7%;">
  <img src="images/voli.jpeg" class="card-img-top" style="border-radius: 5%; height: 14rem; text-align: center;">
  </div>
  <h3><br>Voli <br>
  Smp 26 pontianak juga memiliki extrakulikuler voli dimana exstrakulikuler <br>ini diikuti oleh siswa putra dan putri smp 26 pontianak. Ekstrakulikuler <br> ini diadakan setiap minggu di halaman sekolah</h3>
</div>
<div class="struktur">
  <h3><br>Futsal <br>
  Futsal adalah salah satu ekstrakulikuler yang banyak diminati oleh siswa <br>putra. Ekstrakulikuler ini juga diadakan pada setiap minggu. </h3>
  <div class="carddd" style="width: 28rem; padding-left: 7%;">
  <img src="images/futsal.jpeg" class="card-img-top" style="border-radius: 5%; text-align: center;">
  </div>
</div>

</div>
    <div class="fasilitas" id="fasilitas">
      <h1><strong>Fasilitas</strong></h1>
      <div class="cardd">
        <div class="card m-4" style="width: 240px;">
            <img src="/images/kelas.jpeg" class="card-img-top" style="height: 200px;" alt="...">
            <div class="card-body">
                <p class="card-text">Ruang Kelas</p>
            </div>
        </div>
        <div class="card m-4" style="width: 240px;">
            <img src="/images/perpuss.jpeg" class="card-img-top" style="height: 200px;" alt="...">
            <div class="card-body">
                <p class="card-text">Ruang Perpustakaan</p>
            </div>
        </div>
        <div class="card m-4" style="width: 240px;">
            <img src="/images/labkom.jpeg" class="card-img-top" style="height: 200px;" alt="...">
            <div class="card-body">
                <p class="card-text">Ruang Lab. Komputer</p>
            </div>
        </div>
        <div class="card m-4" style="width: 240px;">
            <img src="/images/labipa.jpeg" class="card-img-top" style="height: 200px;" alt="...">
            <div class="card-body">
                <p class="card-text">Ruang Lab. IPA</p>
            </div>
        </div>
    </div>
    </div>

    {{-- cousosel --}}
    <div class="beritasekolah" id="galeri">
   <h1><strong>Galeri</strong> 
   </h1>
   

        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" >
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="/images/17an.jpg" style="border-radius: 4%; max-height: 700px;" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>"Hari Kemerdekaan"</h5>
                  <button class="btn btn-primary" onclick="window.location.href='https://www.instagram.com/smpn26ptk/'">Selengkapnya</button>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="/images/belajar.jpg" style="border-radius: 4%; max-height: 700px;" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>"Kegiatan Pembelajaran"</h5>
                  <button class="btn btn-primary" onclick="window.location.href='https://www.instagram.com/smpn26ptk/'">Selengkapnya</button>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/images/sehat.jpg" style="border-radius: 4%; max-height: 700px;" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Jum'at Sehat</h5>
                  <button class="btn btn-primary" onclick="window.location.href='https://www.instagram.com/smpn26ptk/'">Selengkapnya</button>

                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
    </div>
     <!-- {{-- guru --}} -->
     <div class="dataguru">
    <div class="row" id="guru">
    <h1 style="justify-content: center; display: flex"><strong>Guru & Staff</strong></h1>
        @foreach($posts as $post)
                  
                        <div class="col-sm-3 " >
                          
                            <div class="gambaradmin">
                                  <div class="gambarcrud">
                                    <img src="cover/{{ $post->cover }}" class="card-img-top" style="max-height: 280px; width: 240px;" alt="Gambar Anda" class="gambar">
                                  </div> 
                            </div>
                            <table class="table">
                              @csrf
                                <tr>
                                    <td><h6><strong>{{ $post->title }}</strong></h6></td>
                                </tr>
                                <!-- <tr>
                                    <td>{{ $post->author }}</td>
                                </tr> -->
                                <tr>
                                <td>{{ $post->body }}</td>
                                </tr>
                            </table>
                        </div>
                      
            @endforeach
    </div>
    </div>
    @include('partials.footer')
</body>
</html>