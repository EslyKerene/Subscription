@extends('users.layouts.app')

@section('content')


<div class="container-fluid cat pt-5">
  <div class="row">
    <div class="col-md-3 one">
      <strong>Categories</strong>
      <br>
      @foreach ($categories as $category)
       {{-- <img class="a" src="{{ asset('assets/img/logo.jpg') }}" width="100" height="60"><br>
        <a class="nav-link" aria-current="page" href="#"></a> --}}
        
{{-- @dump($category); --}}
        <a class="nav-link" aria-current="page" href="#">{{$category->name}}</a>
        <img class="a" src="{{ $category->cat_image}}" width="100" height="60"><br>

        
          
        @endforeach

    </div>

    <div class="col-md-8 two">
      
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/logo.jpg') }}" class="d-block w-100" alt="oups!!!">
                <div class="carousel-caption d-none d-md-block top">
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
    {{-- @dump($services); --}}

    @foreach ($services as $service)




  <div class="col-md-3 cardsection"> 
    <div class="card sectioncard">
        
    <img class="card-img-top" src="{{ $service->services_image}}" class="card-img-top" alt="...">

      <div class="card-body">
        <h5 class="card-title">{{$service->name}}</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

        <a href="/details/{{$service->id}}" class="btn btn-primary">More views</a>
      </div>
    </div>
  </div>
  @endforeach

  

</div>

</div>
</div>

@include('users.layouts.footer')















    
@endSection
