@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h2>Our Shipping Policy</h2>
                            <p>
                                We strive to provide you with the best possible customer experience. For this reason we aim to have any orders placed before 2pm Monday to Friday dispatched and sent out the next day. The estimated shipping times are listed below.
                            </p>
                            <ul>
                                <li><b>The Republic of Ireland and UK:</b> 2 Days</li>
                                <li><b>Mainland Europe:</b> 5 Days</li>
                                <li><b>Rest of the world:</b> 14 Days</li>
                            </ul>
                            <p class="small-para"><i>
                                Please Note: The above times are only estimates and times may vary depending on location and local carriers. The above times only include business days and exclude weekends and holidays.
                            </i></p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('img/shipping.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop