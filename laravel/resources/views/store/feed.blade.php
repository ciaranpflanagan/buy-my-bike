@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($products as $product)
        <div class="row justify-content-center">
            <div class="col-md-8">
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
                                <button class="btn btn-primary">Buy Now €120</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
    @endforeach
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <img src="{{ asset('img/background-image.jpg') }}" alt="" class="img-fluid float-left">
                        </div>
                        <div class="col-md-4">
                            <h2>New Bike For Sale</h2>
                            <p>This is a top quality, top of the range road bike.</p>
                            <button class="btn btn-primary">Buy Now €120</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <img src="{{ asset('img/background-image.jpg') }}" alt="" class="img-fluid float-left">
                        </div>
                        <div class="col-md-4">
                            <h2>New Bike For Sale</h2>
                            <p>This is a top quality, top of the range road bike.</p>
                            <button class="btn btn-primary">Buy Now €120</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
