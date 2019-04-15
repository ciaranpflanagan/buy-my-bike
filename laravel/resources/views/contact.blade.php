@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <!-- Thank you message -->
                            @if($errors->any())
                                <div class="alert alert-success">
                                    <h4>{{$errors->first()}}</h4>
                                </div>
                            @endif
                            <h2>Contact Us</h2>
                            <p>
                                Please feel free to contact us about any issues you may have. Whether it be in relation to an order, a product on our site or anything else please fill out the contact form. We aim to reply to any issues with in 24hrs.<br><br>
                                Thank You,<br>
                                <i>The Buy My Bike Team</i>
                            </p>
                        </div>
                        <div class="col-md-5">
                            <form action="{{ route('submit_contact') }}" method="post">
                                {{ csrf_field() }}
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name"><br>

                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email"><br>

                                <label for="message">Message</label>
                                <textarea name="message" class="form-control" rows="5"></textarea><br>

                                <input type="submit" value="Send" class="form-control btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop