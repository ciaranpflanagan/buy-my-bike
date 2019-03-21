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
        </div>
        <div class="col-md-8 background-image">
            <img src="{{ asset('img/background-image.jpg') }}" alt="" class="img-fluid">
        </div>
    </div>
</div>

@stop