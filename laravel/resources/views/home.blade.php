@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1>All Sales</h1>
            <div class="card">
                <div class="card-body">
                    
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <h1>All Products</h1>
            @foreach($products as $product)
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
            @endforeach
        </div>
    </div>
</div>
@endsection
