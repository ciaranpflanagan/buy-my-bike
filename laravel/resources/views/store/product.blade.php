@extends('layouts.app')

@section('content')
@foreach ($products as $product)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <img src="{{ asset('img/background-image.jpg') }}" alt="" class="img-fluid float-left">
                            </div>
                            <div class="col-md-4">
                                <h2>{{ $product->title }}</h2>
                                <p>{{ $product->description }}</p>
                                <button class="btn btn-primary">Buy Now €{{ $product->price }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Further Product Details</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection
