@extends('users.layouts.app')


@section('content')

<body>



    <center>
        <nav aria-label="breadcrumb one">
            <div class="title">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Categories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </div>
        </nav>
    </center>

    {{-- <div class="container">
        <div class="row">
            <div class="col-md-6 details">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/img/netflix.jpg') }}" class="d-block w-100" alt="oups!!!">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6  ">
                <div class="description">
                    <h3 class="Netflix n"> Netflix </h3>
                    <p class="Originals s"> Netflix, is an American subscription streaming service and production
                        company.
                        It offers a film and television series library through distribution
                        deals as well as
                        its own productions, known as Netflix Originals.
                    </p>


                </div>
            </div>
        </div>
    </div>

    --}}



    <div class="row">
        <div class="col-sm-12">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                     {{-- @foreach ($services as $service) --}}
                    <center>
                         {{-- @dump($pricings)  --}}

                
                            

                        <h6 class="display-6"> {{$pricings[0]->name}} </h6>
                    </center>
                    <p>{{$pricings[0]->description}}</p>
                        {{-- @endforeach --}}
                </div>
            </div>
        </div>
    </div>

    <div class="container">

    
        <div class="responsive details">
            <div class="row">
                <div class="col-md-3 cardsection">
                    <div class="card sectioncard DT">

                        <div class="card-body">
                            <div class="standard">
                                <h4 class="card-title">
                                    <strong>
                                        <center>Basic</center>
                                    </strong>
                                </h4>
                            </div>

                            <p class="info1"><strong>
                                    <h5>Characteristics:</h5>
                                </strong>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="icon bi bi-check2-circle" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                    <path
                                        d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                </svg> 20 movies
                                <br>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="icon bi bi-check2-circle" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                    <path
                                        d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                </svg> 20 movies
                                <br>

                            </p>
                            <dd></dd>

                            <p class="info1"> <strong>
                                    <h5>Validity:</h5>
                                </strong>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="icon bi bi-check2-circle" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                    <path
                                        d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                </svg>
                                {{$pricings[0]->validity}}
                            </p>
                            <p class="info1"> <strong>
                                    <h5>Price:</h5>
                                </strong>
                                <center><del> 65$</del> </center>
                            </p>

                            <p class="card-text">
                                <center> 
                                    {{$pricings[0]->amount}}frs</center>
                            </p>
                            <a href="#" class="btn  btn1"> <b> Buy now </b> </a>
                            <a href="#" class="btn btn-secondary sec"> <b> Add to cart </b> </a>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 cardsection">
                    <div class="card sectioncard DT">

                        <div class="card-body">
                            <div class="Premuim">

                                <h4 class="card-title">
                                    <strong>
                                        <center>Standard</center>
                                    </strong>
                                </h4>

                            </div>
                            <p class="info1"><strong>
                                    <h5>Characteristics:</h5>
                                </strong>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="icon bi bi-check2-circle" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                    <path
                                        d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                </svg> 20 movies
                                <br>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="icon bi bi-check2-circle" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                    <path
                                        d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                </svg> 20 movies
                                <br>


                            </p>
                            <dd></dd>

                            <p class="info1"> <strong>
                                    <h5>Validity:</h5>
                                </strong>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="icon bi bi-check2-circle" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                    <path
                                        d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                </svg> {{$pricings[3]->validity}}
                            </p>
                            <p> <strong>
                                    <h5>Price:</h5>
                                </strong>
                                <center><del> 65$</del> </center>
                            </p>

                            <p class="card-text">
                                <center> {{$pricings[3]->amount}}frs </center>
                            </p>
                            <a href="#" class="btn btn2"><b> Buy now</b></a>
                            <a href="#" class="btn btn-secondary sec"> <b> Add to cart</b> </a>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 cardsection">
                    <div class="card sectioncard DT">

                        <div class="card-body">
                            <div class="VIP">

                                <h4 class="card-title">
                                    <strong>
                                        <center>Prenuim</center>
                                    </strong>
                                </h4>
                            </div>

                            <p class="info1"><strong>
                                    <h5>Characteristics:</h5>
                                </strong>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="icon bi bi-check2-circle" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                    <path
                                        d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                </svg> 20 movies
                                <br>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="icon bi bi-check2-circle" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                    <path
                                        d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                </svg> 20 movies
                                <br>

                            </p>
                            <dd></dd>

                            <p class="info1"> <strong>
                                    <h5>Validity:</h5>
                                </strong>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="icon bi bi-check2-circle" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                    <path
                                        d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                </svg> {{$pricings[2]->validity}}
                            </p>
                            <p class="info1"> <strong>
                                    <h5>Price:</h5>
                                </strong>
                                <center><del> 65$</del> </center>
                            </p>

                            <p class="card-text">
                                <center> {{$pricings[2]->amount}}frs </center>
                            </p>
                            <a href="#" class="btn btn3"><b> Buy now</b></a>
                            <a href="#" class="btn btn-secondary sec"> <b> Add to cart</b> </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 cardsection">
                    <div class="card sectioncard DT">

                        <div class="card-body">
                            <div class="VVIP">

                                <h4 class="card-title">
                                    <strong>
                                        <center>V.I.P</center>
                                    </strong>
                                </h4>
                            </div>

                            <p class="info1"><strong>
                                    <h5>Characteristics:</h5>
                                </strong>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="icon bi bi-check2-circle" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                    <path
                                        d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                </svg> 20 movies
                                <br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="icon bi bi-check2-circle" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                    <path
                                        d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                </svg> 20 movies
                                <br>

                            </p>
                            <dd></dd>

                            <p class="info1"> <strong>
                                    <h5>Validity:</h5>
                                </strong>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="icon bi bi-check2-circle" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                    <path
                                        d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                </svg> {{$pricings[1]->validity}}
                            </p>
                            <p class="info1"> <strong>
                                    <h5>Price:</h5>
                                </strong>
                                <center><del> 65$</del> </center>
                            </p>

                            <p class="card-text">
                                <center> {{$pricings[1]->amount}}frs </center>
                            </p>
                            <a href="#" class="btn btn4"><b> Buy now</b></a>
                            <a href="#" class="btn btn-secondary sec"> <b> Add to cart</b> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
























        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">

                            <strong>
                                <p class="display-6 ss"> Suggested services </p>
                            </strong>

                        </div>
                    </div>
                </div>
            </div>
        </div>








        <div class="container">
            <div class="responsive">
                <div class="row">
                    <div class="col-md-3 cardsection">
                        <div class="card sectioncard">
                            <img class="card-img-top" src="{{asset('assets/img/amazon.jpg')}}" class="card-img-top"
                                alt="...">

                            <div class="card-body">
                                <h5 class="card-title">AMAZON</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.
                                </p>

                                <a href="/details" class="btn btn-primary">See more </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 cardsection">
                        <div class="card sectioncard">

                            <img class="card-img-top" src="{{asset('assets/img/logo.jpg')}}" class="card-img-top"
                                alt="...">

                            <div class="card-body">
                                <h5 class="card-title">CANAL+</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.
                                </p>
                                <a href="#" class="btn btn-primary">See more </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 cardsection">
                        <div class="card sectioncard">
                            <img class="card-img-top" src="{{asset('assets/img/sportify.jpg')}}" class="card-img-top"
                                alt="...">

                            <div class="card-body">
                                <h5 class="card-title">Spotify</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.
                                </p>
                                <a href="#" class="btn btn-primary">See more </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 cardsection">
                        <div class="card sectioncard">
                            <img class="card-img-top" src="{{asset('assets/img/sportify.jpg')}}" class="card-img-top"
                                alt="...">

                            <div class="card-body">
                                <h5 class="card-title">Deezer</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.
                                </p>
                                <a href="#" class="btn btn-primary">See more </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>













</body>

@include('users.layouts.footer')


















@endSection