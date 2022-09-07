@extends('users.layouts.app')

@section('content')
    <div class="container">


        <div class="responsive details">
            <div class="row">
                <center>
                    <div class="col-md-10 ">

                        <div class="card payment">

                            <h5 class="card-title">Subscription</h5>

                    <div class="col-md-3 ">
    {{-- @dump($pricings);   --}}
{{-- @foreach ($services as $service) --}}
    
                            <p class="pay">
                                <strong>
                                    <h5>Service name:</h5>
                                </strong>
                                {{$pricings[0]->name}} 

                                <br>
                            </p>

                            <p class="pay"><strong>
                                    <h5>Price:</h5>
                                </strong>
                                {{$pricings[0]->amount}}
                                
                                <br>
                            </p>

                            <p class="pay"><strong>
                                    <h5>Validity:</h5>
                                </strong>
                                {{$pricings[0]->validity}}
                                
                                <br>
                            </p>

                            </div>

                            <h5 class="card-title">Payment method</h5>
                            <div class="col-md-3 ">

                            <input type="checkbox" name="Momo" value="Mobile Money"><br> Mobile Money <br>
                            <input type="checkbox" name="OM" value="Orange Money"><br> Orange money<br>
                        </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Phone number</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="Phone number" value=""
                                        placeholder="Enter your number">
                                    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                    <div class="row mb-0">
                                        <center>
                                            <div class="col-md-6 submit">
                                                <button type="submit" class="btn btn-danger">
                                                    Submit
                                                </button>
                                            </div>
                                    </div>
                </center>

                {{-- @endforeach --}}




                </center>

            </div>
        </div>
    </div>

@endsection
