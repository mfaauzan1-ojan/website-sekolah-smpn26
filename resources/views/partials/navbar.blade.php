<head>
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="{{ asset('path/to/bootstrap.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <style>
header {
    background-color: #9dc183;
    color: #fff;
    padding: 3px;
    padding-top: 1%;
    padding-bottom: 1px;    
}

header nav li {
    display: inline-block;
    margin-right: 1rem;
    font-size: large;
}

header nav li a:hover{
    color: white;
    transition: background-color 0.1s, color 0.3s;
}
a:active{
    background-color: #fff;
}

header nav li:last-child {
    margin-right: 0;
}

header nav a {
    nav-left: 40px;
    color: #140606;
    text-decoration: none;
    cursor: pointer;
}


</style>
</head>
<body>
    <script src="{{ asset('path/to/bootstrap.js') }}"></script>
<header>
        <nav>
            <ul>
                <li><strong>SMP Negeri 26 Pontianak</strong></li>
                <li><a href="{{ url('/') }}" class="active">Beranda</a></li>
                <li><a href="{{ url('/tentangkami') }}" class="active">Tentang Kami</a></li>
                <li><a href="{{ url('/kontak') }}">Kontak</a></li>
                <li><a href="{{ url('/ntah') }}">ntah ape</a></li>
            </ul>
            
        </nav>
</header> 
</body>
{{-- 
<ul class="navbar-nav me-auto mb-2 mb-lg-o">
    <li class="nav-item">
        <a href=""></a>

    </li>
</ul> --}}