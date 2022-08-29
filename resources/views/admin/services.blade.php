@extends('admin.app')


@section('content')

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand">
            <strong>Subscription </strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            {{-- <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Categories</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/details">Services</a>
              </li>
      
        </ul> --}}

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">

                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-danger" type="submit">Search</button>&nbsp;
                        </form>

                        <li class="nav-item">
                            <a class="btn btn-danger" href="">{{ __('Login') }}</a>

                        </li>
                        <li class="nav-item">
                            <a class="btn btn-light" href="">{{ __('Signin') }}</a>

                        </li>
                    </div>
                </nav>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-title">
            
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a  class="nav-link "  href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pricing">Pricing</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sub">
            <center><h1> Services </h1></center>
        </div>
    </div>
</div>
@endsection
