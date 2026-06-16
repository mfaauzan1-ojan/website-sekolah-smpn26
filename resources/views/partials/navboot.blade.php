<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="{{ asset('path/to/bootstrap.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<style>
        .navbar-brand, .navbar-toggler{
            color: #566246;
            font-size: x-large;
            font-weight: bold;
            padding-left: 2%;
            padding-right: 30%;
        }

        .nav-item, .nav-link {
          color: #566246;
          font-size: large;
        }
        
    </style>

<body>    
   

<script src="{{ asset('path/to/bootstrap.js') }}"></script>
<div class="lataratas">
 

</div>

<nav class="navbar navbar-expand-lg " style="background-color: white;">
    <div class="container-fluid">
      <img src="images/logosmp26.png" alt="" style="width: 70px; padding-left:2%">
      <a class="navbar-brand"  href="{{ url('/') }}">SMP Negeri 26 Pontianak</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Website") ? 'active' : '' }}"  aria-current="page" href="{{ url('/') }}">
              <strong>Beranda</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Pengumuman") ? 'active' : '' }}"  aria-current="page" href="{{ url('/pengumuman') }}">
              <strong>Berita</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Tentangkami") ? 'active' : '' }}"  aria-current="page" href="{{ url('/tentangkami') }}">
              <strong>Tentang</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "extrakulikuler") ? 'active' : '' }}"  aria-current="page" href="{{ url('/tentangkami#extrakulikuler') }}">
              <strong>Extrakulikuler</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "fasilitas") ? 'active' : '' }}"  aria-current="page" href="{{ url('/tentangkami#fasilitas') }}">
              <strong>Fasilitas</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "guru") ? 'active' : '' }}"  aria-current="page" href="{{ url('/tentangkami#guru') }}">
              <strong>Guru & Staff</strong></a>
          </li>
          
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ auth()->user()->name ? 'active' : '' }}" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person-fill-gear"></i>
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ url('/index')}}"><strong>{{ auth()->user()->name }}</strong></a></li>
            <li><a class="dropdown-item" href="{{ url('/dataguru')}}">Data Guru</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure?');"><i class="bi bi-box-arrow-right"></i><strong> Logout</strong></button>
            </form>
            </li>
          </ul>
        </li>
        @endauth 
        </ul>
      </div>
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>


        
         