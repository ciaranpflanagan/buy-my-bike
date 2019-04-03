@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($products as $product)
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php 
                                    $image = asset($product->image);
                                ?>
                                <img src="{{ $image }}" alt="" class="img-fluid float-left">
                            </div>
                        </div><br>
                        <div class="row">
							<div class="col-md-12 product-pay">
                                <h2>{{ $product->title }}</h2>
                                <p>{{ $product->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                            	<h4 class="card-title pay-by-card">Pay By Card</h4>
                                <form action="{{ route('store.thank_you', ['slug' => $product->slug]) }}" method="post">
                                	{{ csrf_field() }}
                                	<label for="card-name">Cardholder Name</label>
                                	<input type="text" name="name" class="form-control" placeholder="John Doe"><br>
                                	<label for="card-number">Card Number</label>
                                	<input type="text" name="number" class="form-control" maxlength="16" placeholder="1234 5678 9123 4567"><br>
									<div class="row">
	                                	<div class="col-md-4">
	                                		<label for="Expiry">Expiry</label>
	                                		<input type="text" name="expiry" class="form-control" placeholder="01/99">
	                                	</div>
	                                	<div class="col-md-4">
	                                		<label for="code">Security Code</label>
	                                		<input type="text" name="code" class="form-control" placeholder="123">
	                                	</div>
	                                	<div class="col-md-4">
	                                		<br>
	                                		<input type="submit" value="Pay" class="form-control btn btn-primary">
	                                	</div>
									</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
    @endforeach
</div>
@endsection
