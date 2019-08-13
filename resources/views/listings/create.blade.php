@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h1 class="display-3">Create a New Listing</h1>
    <p class="lead">Provide the details of a new listing below.</p>
</div>

@include('partials.form-error-message')

<form action="/listings" method="POST">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" class="form-control {{ $errors->has('first_name') ? 'is-invalid' : ''}}" name="first_name" id="first_name" placeholder="" value="{{old('first_name')}}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control {{ $errors->has('last_name') ? 'is-invalid' : ''}}" name="last_name" id="last_name" placeholder="" value="{{old('last_name')}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Email Address</label>
                            <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" name="email" id="email" placeholder="" value="{{old('email')}}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="text" class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : ''}}" name="phone_number" id="phone_number" placeholder="" value="{{old('phone_number')}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="">Website Address</label>
                            <input type="url" class="form-control {{ $errors->has('website_url') ? 'is-invalid' : ''}}" name="website_url" id="website_url" placeholder="" value="{{old('website_url')}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Street Address</label>
                            <input type="text" class="form-control {{ $errors->has('street_address') ? 'is-invalid' : ''}}" name="street_address" id="street_address" placeholder="" value="{{old('street_address')}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Street Address 2</label>
                            <input type="text" class="form-control {{ $errors->has('street_address_2') ? 'is-invalid' : ''}}" name="street_address_2" id="street_address_2" placeholder="" value="{{old('street_address_2')}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="">City</label>
                            <input type="text" class="form-control {{ $errors->has('city') ? 'is-invalid' : ''}}" name="city" id="city" placeholder="" value="{{old('city')}}" required>
                        </div>
                    </div>
                    <div class="col-md-5">
                        @include('partials.state-dropdown')
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Zipcode</label>
                            <input type="text" class="form-control {{ $errors->has('zipcode') ? 'is-invalid' : ''}}" name="zipcode" id="zipcode" placeholder="" value="{{old('zipcode')}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Bio</label>
                            <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : ''}}" name="description" id="description" rows="3" >{{old('description')}}</textarea>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12 centered">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    @csrf     
</form>

@endsection