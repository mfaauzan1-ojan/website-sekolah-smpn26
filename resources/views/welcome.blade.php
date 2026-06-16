<!DOCTYPE html>
<html>
<head>
    <title>Halaman Depan {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    {{-- /* bootstrap */ --}}
    <link href="{{ asset('path/to/bootstrap.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    @include('partials.navboot')    
    <script src="{{ asset('path/to/bootstrap.js') }}"></script>
    
<div class="intro">
 <div class="judul">
  <h2>Selamat Datang Di Website Resmi 
  </h2>
  <div class="container" style="width: 15rem; justify-content: center; align-items: center; border: none;">
  <img src="images/logosmp26.png" class="card-img-top">
  </div>
 </div>
</div>

<div class="biginfo">
    <div class="info">
            <h1><strong>SMP Negeri 26 Pontianak</strong></h1>
            <br>
            <p>SMP Negeri 26 Pontianak, yang berdiri sejak tahun 2014, merupakan sebuah sekolah menengah pertama yang terletak di Jalan Tanjung Hulu, 
              Gang Orde Baru. Sebagai bagian integral dari komunitas pendidikan Pontianak, sekolah ini telah berperan penting dalam memberikan 
              pendidikan berkualitas kepada generasi muda sejak pendiriannya.</p>
            <p>Dalam website ini, Anda akan menemukan beragam informasi mengenai SMPN 26 Pontianak seperti fasilitas sekolah yang disediakan 
              dan galeri kegiatan. Anda dapat menjelajahi daftar guru yang berkualifikasi tinggi dan 
              erdedikasi yang membimbing siswa kami dalam mencapai potensi maksimal mereka.</p>
              
            <a href="#visi" class="button">Visi & Misi</a>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>


        
    </div>
</div>
<div class="vimi">
<div class="visi" id="visi">
    {{-- <h1>Visi</h1>
    <p>Sekolah yang beriman dan bertakwa, berakhlak mulia, berprestasi, berbudaya lingkungan, dan berwawasan global.</p >
        <h1>Misi</h1>
    <p><strong>
    1.Mewujudkan pendidikan yang mengedepankan pembentukan profil pelajar pancasila. <br>
    2.Mewujudkan lulusan yang unggul dalam bidang akademik dan non akademik. <br>
    3.Mewujudkan pendidikan yang mengedepankan pembentukan komunitas belajar sepanjang hayat yaitu guru, peserta didik dan orang tua saling  belajar sepanjang hidupnya. <br>
    4.Mewujudkan pendidikan yang menjamin hak belajar bagi setiap peserta didik. <br>
    5.Mewujudkan pendidikan menggunakan pendekatan atau model yang beragam. <br>
    6.Mewujudkan pendidikan mengedepankan keterampilan abad 21.</strong></p> --}}


    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h1>Visi</h1>
          <p class="d-block" style="height: 400px; weight: 300px; padding-top:30px">Sekolah yang beriman dan bertakwa, berakhlak mulia, berprestasi, berbudaya lingkungan, dan berwawasan global.</p>
         
        </div>
        <div class="carousel-item">
          <h1>Misi</h1>
          <p class="d-block" style="height: 400px; weight: 300px">1.Mewujudkan pendidikan yang mengedepankan pembentukan profil pelajar pancasila. <br>
            2.Mewujudkan lulusan yang unggul dalam bidang akademik dan non akademik. <br>
            3.Mewujudkan pendidikan yang mengedepankan pembentukan komunitas belajar sepanjang hayat yaitu guru, peserta didik dan orang tua saling  belajar sepanjang hidupnya. <br>
            4.Mewujudkan pendidikan yang menjamin hak belajar bagi setiap peserta didik. <br>
            5.Mewujudkan pendidikan menggunakan pendekatan atau model yang beragam. <br>
            6.Mewujudkan pendidikan mengedepankan keterampilan abad 21.</p>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    </div>
</div>

    <div class="kontak">
        <h1><strong>KONTAK</strong></h1>
        <div class="gmbrlokasi">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.817936192404!2d109.3671524!3d-0.0251427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d5825383cf495%3A0x15d7f330c985b6cc!2sSMP%20Negeri%2026%20Pontianak!5e0!3m2!1sid!2sid!4v1691385835519!5m2!1sid!2sid" style="border:4px solid #ffff;" 
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="lokasi"></iframe>
    

    <ul>    
            <br>
        <li>
        <i class="fas fa-phone icon"></i><br>(123) 456-7890
        </li>
        <li>
        <i class="far fa-envelope icon"></i><br>smpn26ptk@gmail.com
        </li>
        <li>
            <a href="https://www.instagram.com/smpn26ptk/"><i class="fab fa-instagram icon"></i><br>@smpn26ptk</a>
        </li>
        <li>
            <a href="https://www.google.co.id/maps/dir//X9F8%2BWVR+SMP+Negeri+26+Pontianak,+Gg.+Orde+Baru,+Tj.+Hulu,+Kec.+Pontianak+Tim.,+Kota+Pontianak,+Kalimantan+Barat+78242/@-0.0251427,109.3671524,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e1d5825383cf495:0x15d7f330c985b6cc!2m2!1d109.367146!2d-0.0251413?entry=ttu"><i class="fas fa-map-marker-alt icon"></i><br>Gg. Orde Baru</a>
        </li>
        </ul>
    </div>    
</div>
    @include('partials.footer')
</body>
</html>
