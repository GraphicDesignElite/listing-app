@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-3">Edit: {{ $cpaListing->title }}</h1>
        <p class="lead">See All Listings</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="/cpa-listings/{{$cpaListing->id}}" method="POST" class="pb-2">
                @method('PATCH')
                @csrf
                

                <div class="form-group">
                    <label for="">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ $cpaListing->title }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3" required>{{ $cpaListing->description }}</textarea>
                </div>
                
                <div>
                <button type="submit" class="btn btn-primary">Update</button>    
                <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#myModal">
                        Delete
                </button>
                </form>
            </div>
        </div>
    </div>      
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Are You Sure You Want To Delete This Listing?</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
          
                <!-- Modal body -->
                <div class="modal-body">
                    This action cannot be undone.
                </div>
          
                <!-- Modal footer -->
                <div class="modal-footer">
                    <form action="/cpa-listings/{{$cpaListing->id}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
          

@endsection