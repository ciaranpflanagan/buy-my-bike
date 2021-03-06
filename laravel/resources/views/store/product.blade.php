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
                                <?php 
                                    $image = asset($product->image);
                                ?>
                                <img src="{{ $image }}" alt="" class="img-fluid float-left">
                            </div>
                            <div class="col-md-4">
                                <h2>{{ $product->title }}</h2>
                                <p>{{ $product->description }}</p>
                                <a href="{{ route('store.pay', ['slug' => $product->slug]) }}"><button class="btn btn-primary">Buy Now €{{ $product->price }}</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection
