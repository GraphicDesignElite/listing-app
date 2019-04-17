@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h1 class="display-3">Create a New Listing</h1>
    <p class="lead">Provide the details of a new CPA listing below.</p>
</div>

@include('partials.error-message')

<form action="/cpa-listings" method="POST">
    <div class="container">
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Title</label>
            <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" name="title" id="title" placeholder="Title" value="{{old('title')}}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : ''}}" name="description" id="description" rows="3" required>{{old('description')}}</textarea>
            </div>
            
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            @csrf
        </div>
    </div>      
</form>

@endsection