@extends('users.layouts.app')

@section('content')


<div class="container-fluid pt-5">
  <div class="row">
    <div class="col-md-3 cat one">
      <strong>Categories</strong>
      <br>
      
       <img class="a" src="{{ asset('assets/img/logo.jpg') }}" width="100" height="60"><br>
        <a class="nav-link" aria-current="page" href="#">Movies</a>
        

       <img class="a" src="{{ asset('assets/img/logo.jpg') }}" width="100" height="60"><br>
        <a class="nav-link" aria-current="page" href="#">Musics</a>
       

       <img class="a" src="{{ asset('assets/img/logo.jpg') }}" width="100" height="60"><br>
        <a class="nav-link" aria-current="page" href="#">Games</a>
       

       <img class="a" src="{{ asset('assets/img/logo.jpg') }}" width="100" height="60"><br>
        <a class="nav-link" aria-current="page" href="#">Shopping</a>
       

       <img class="a" src="{{ asset('assets/img/logo.jpg') }}" width="100" height="60"><br>
       <a class="nav-link" aria-current="page" href="#">Sports</a>
        

       <img class="a" src="{{ asset('assets/img/logo.jpg') }}" width="100" height="60"><br> 
       <a class="nav-link" aria-current="page" href="#">Softwares</a>
        

    </div>

    <div class="col-md-8 two">
      
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/logo.jpg') }}" class="d-block w-100" alt="oups!!!">
                <div class="carousel-caption d-none d-md-block">
                  <h3>Welcome to subscription</h3>
                  <p>Get solutions to your IT problems</p>
                     <a href="#" class="btn btn-danger btn-lg">Start here</a>

                </div>
          
            </div>
        </div>
    </div>

    </div>
    
  </div>
</div> 

              {{--services--}} 

<div class="container">
  <div class="row">
    <div class="col-sm-12">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <center><h1 class ="display-3"> Services </h1>
        <p class="lead"> Explore our various services</p></center>
      </div>
    </div>
    </div>
  </div>

  <div class="responsive">
  <div class="row">
  <div class="col-md-3 cardsection"> 
    <div class="card sectioncard">
    <img class="card-img-top" src="{{asset('assets/img/netflix.jpg')}}" class="card-img-top" alt="...">

      <div class="card-body">
        <h5 class="card-title">NETFLIX</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="/details" class="btn btn-primary">More views</a>
      </div>
    </div>
  </div>

  <div class="col-md-3 cardsection">
    <div class="card sectioncard">
    <img class="card-img-top" src="{{asset('assets/img/amazon.jpg')}}" class="card-img-top" alt="...">

      <div class="card-body">
        <h5 class="card-title">AMAZON</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">See more </a>
      </div>
    </div>
  </div>

  <div class="col-md-3 cardsection">
    <div class="card sectioncard">
    <img class="card-img-top" src="{{asset('assets/img/logo.jpg')}}" class="card-img-top" alt="...">

      <div class="card-body">
        <h5 class="card-title">CANAL+</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">See more </a>
      </div>
    </div>
  </div>
  <div class="col-md-3 cardsection">
    <div class="card sectioncard">
    <img class="card-img-top" src="{{asset('assets/img/sportify.jpg')}}" class="card-img-top" alt="...">

      <div class="card-body">
        <h5 class="card-title">Spotify</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">See more </a>
      </div>
    </div>
  </div>
  <div class="col-md-3 cardsection">
    <div class="card sectioncard">
    <img class="card-img-top" src="{{asset('assets/img/sportify.jpg')}}" class="card-img-top" alt="...">

      <div class="card-body">
        <h5 class="card-title">Deezer</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">See more </a>
      </div>
    </div>
  </div>

  <div class="col-md-3 cardsection">
    <div class="card sectioncard">
    <img class="card-img-top" src="{{asset('assets/img/sport.jpg')}}" class="card-img-top" alt="...">

      <div class="card-body">
        <h5 class="card-title">Sports</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">See more </a>
      </div>
    </div>
  </div>
  <div class="col-md-3 cardsection">
    <div class="card sectioncard">
    <img class="card-img-top" src="{{asset('assets/img/logo.jpg')}}" class="card-img-top" alt="...">

      <div class="card-body">
        <h5 class="card-title">Apple Music</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">See more </a>
      </div>
    </div>
  </div>
  <div class="col-md-3 cardsection">
    <div class="card sectioncard">
    <img class="card-img-top" class="card-img-top" src="{{asset('assets/img/games.jpg')}}" class="card-img-top" alt="...">

      <div class="card-body">
        <h5 class="card-title">Games</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">See more </a>
      </div>
    </div>
  </div>


</div>

</div>
</div>

@include('users.layouts.footer')















    
@endSection
