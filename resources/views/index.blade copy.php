<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Depan </title>
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

    <div class="kartu">
        <div class="card m-4" style="width: 18rem;">
            <img src="/images/gue.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card m-4" style="width: 18rem;">
            <img src="/images/gue.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card m-4" style="width: 18rem;">
            <img src="/images/gue.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card m-4" style="width: 18rem;">
            <img src="/images/gue.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>

    {{-- cousosel --}}
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/images/inpo.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/images/bckgrnd.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

{{guru}}
      
    <div class="allguru">
        <h2> Guru</h2>
        @foreach ($posts as $post)
      <div class="guru" id="cardContainer">
     
        <div class="row align-items-start">
        <div class="card col-4 m-4" style="width: 10rem;">
            <img src="cover/{{ $post->cover }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">{{ $post->title }}
                    <br>{{$post->author }}
                    <br>{{ $post->body }}
                </p>
                <td>
                           <form action="/delete/{{ $post->id }}" method="post">
                            <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                            @csrf
                            @method('delete')
                        </form>
                       </td>
            </div>
        </div>
       
        </div>
       
        </div>
        
        @endforeach
      </div>
    @include('partials.footer')
    <script src="script.js"></script>
</body>
</html>