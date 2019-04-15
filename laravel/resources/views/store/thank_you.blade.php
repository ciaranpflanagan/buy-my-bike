@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Thank You!</h1>
                                <p>
                                    Thank you for your purchase of <b>{{ $products->title }}</b>.
                                </p>
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
                            <div class="col-md-4">
                                <?php 
                                    $image = asset($products->image);
                                ?>
                                <img src="{{ $image }}" alt="" class="img-fluid float-left">
                            </div>
                            <div class="col-md-8">
                                <h2>{{ $products->title }}</h2>
                                <p>{{ $products->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
