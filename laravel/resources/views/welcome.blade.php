@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 main-heading">
            <h1>
                Your one stop shop to buy any type of bike.
            </h1>
            <h5 class="main-sub-heading">
                Road, race, commuter / hybrid, kids bike? We have them all!
            </h5>
            <br><br>
            <a href="{{ route('store') }}"><button class="btn btn-primary form-control">Visit Our Store</button></a>
        </div>
        <div class="col-md-8 background-image">
            <img src="{{ asset('img/background-image.jpg') }}" alt="" class="img-fluid">
        </div>
    </div>
        <div class="divider"></div>
    <div class="row">
        <div class="col-md-4 info-boxes">
            <div class="card">
                <div class="card-body">
                    <h1>Browse</h1>
                    <p>
                        Browse our wide range of new and second hand bikes!
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 info-boxes">
            <div class="card">
                <div class="card-body">
                    <h1>Choose</h1>
                    <p>
                        Choose your perfect bike and browse the many pictures of it!
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 info-boxes">
            <div class="card">
                <div class="card-body">
                    <h1>Pay</h1>
                    <p>
                        Quickly and easily pay for your bike in no time at all. 
                    </p> 
                </div>
            </div>
        </div>
    </div>
</div>

@stop