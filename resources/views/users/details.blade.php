@extends('users.layouts.app')


@section('content')

<body>



    <center>
        <nav aria-label="breadcrumb one">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Categories</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
        </nav>
    </center>

    <div class="container">
        <div class="row">

            <div class="col-md-4 a">
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
                    <p class="Originals s"> Netflix, is an American subscription streaming service and production company.
                        It offers a film and television series library through distribution
                        deals as well as
                        its own productions, known as Netflix Originals.
                    </p>


                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-sm-12">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <center>
                        <h6 class="display-6"> Subscriptions </h6>
                    </center>

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
                            <h4 class="card-title">
                                <center>Standard</center>
                            </h4>


                            <p class="info1"><strong>
                                    <h5>Characteristics:</h5>
                                </strong>
                                <center>20 movies</center>
                            </p>
                            <dd></dd>

                            <p class="info1"> <strong>
                                    <h5>Validity:</h5>
                                </strong>
                                <center> 1 month </center>
                            </p>
                            <p class="info1"> <strong>
                                    <h5>Price:</h5>
                                </strong>
                                <center><del> 65$</del> </center>
                            </p>

                            <p class="card-text">
                                <center> 50$ </center>
                            </p>
                            <a href="#" class="btn btn-primary btn1"> <b> Buy now </b> </a>
                            <a href="#" class="btn btn-secondary"> <b> Add to cart </b> </a>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 cardsection">
                    <div class="card sectioncard DT">

                        <div class="card-body">
                            <h4 class="card-title">
                                <center>Premuim</center>
                            </h4>


                            <p class="info1"><strong>
                                    <h5>Characteristics:</h5>
                                </strong>
                                <center>20 movies</center>
                            </p>
                            <dd></dd>

                            <p class="info1"> <strong>
                                    <h5>Validity:</h5>
                                </strong>
                                <center> 3 months </center>
                            </p>
                            <p> <strong>
                                    <h5>Price:</h5>
                                </strong>
                                <center><del> 65$</del> </center>
                            </p>

                            <p class="card-text">
                                <center> 50$ </center>
                            </p>
                            <a href="#" class="btn btn-primary"><b> Buy now</b></a>
                            <a href="#" class="btn btn-secondary"> <b> Add to cart</b> </a>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 cardsection">
                    <div class="card sectioncard DT">

                        <div class="card-body">
                            <h4 class="card-title">
                                <center>V.I.P</center>
                            </h4>


                            <p class="info1"><strong>
                                    <h5>Characteristics:</h5>
                                </strong>
                                <center>20 movies</center>
                            </p>
                            <dd></dd>

                            <p class="info1"> <strong>
                                    <h5>Validity:</h5>
                                </strong>
                                <center> 6 months </center>
                            </p>
                            <p class="info1"> <strong>
                                    <h5>Price:</h5>
                                </strong>
                                <center><del> 65$</del> </center>
                            </p>

                            <p class="card-text">
                                <center> 50$ </center>
                            </p>
                            <a href="#" class="btn btn-primary"><b> Buy now</b></a>
                            <a href="#" class="btn btn-secondary"> <b> Add to cart</b> </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 cardsection">
                    <div class="card sectioncard DT">

                        <div class="card-body">
                            <h4 class="card-title">
                                <center>V.V.I.P</center>
                            </h4>


                            <p class="info1"><strong>
                                    <h5>Characteristics:</h5>
                                </strong>
                                <center>20 movies</center>
                            </p>
                            <dd></dd>

                            <p class="info1"> <strong>
                                    <h5>Validity:</h5>
                                </strong>
                                <center> 12 months </center>
                            </p>
                            <p class="info1"> <strong>
                                    <h5>Price:</h5>
                                </strong>
                                <center><del> 65$</del> </center>
                            </p>

                            <p class="card-text">
                                <center> 50$ </center>
                            </p>
                            <a href="#" class="btn btn-primary"><b> Buy now</b></a>
                            <a href="#" class="btn btn-secondary"> <b> Add to cart</b> </a>
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
                
                    <strong> <p class="display-6 ss"> Suggested services </p></strong>
                 
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
                                <a href="#" class="btn btn-primary">See more </a>
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