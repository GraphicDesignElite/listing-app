@extends('layouts.dashboard')

@section('dashboard')
    <div class="jumbotron text-center">
        <h1 class="display-3">Edit: {{ $listing->title }}</h1>
        <p class="lead">See All Listings</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="/dashboard/listing/{{$listing->id}}" method="POST" class="pb-2">
                @method('PATCH')
                @csrf
                

                <div class="form-group">
                    <label for="">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ $listing->title }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3" required>{{ $listing->description }}</textarea>
                </div>
                
                <div>
                <button type="submit" class="btn btn-primary">Update</button>    
                @if(!$listing->hide_listing)
                    <button type="button" class="btn btn btn-danger" data-toggle="modal" data-target="#myModal">
                        Hide Profile
                    </button>
                @else
                    <button type="button" class="btn btn btn-success" data-toggle="modal" data-target="#myModal">
                        Show Profile
                    </button>
                @endif
                </form>
            </div>
        </div>
    </div>      
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                @if(!$listing->hide_listing)
                    <div class="modal-header">
                        <h4 class="modal-title">Are You Sure You Want Hide This Listing?</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
            
                    <!-- Modal body -->
                    <div class="modal-body">
                        You are about to hide your profile from view. No one on the site will be able to see your listing any longer.
                    </div>
            
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <form action="/dashboard/listing/{{$listing->id}}/hide" method="POST">
                            @method('PATCH')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button> 
                        </form>
                    </div>
                @else
                    <div class="modal-header">
                        <h4 class="modal-title">Show My Listing</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
            
                    <!-- Modal body -->
                    <div class="modal-body">
                        Your listing will be reactivated. You will be found in search and your profile will be visible. 
                    </div>
            
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <form action="/dashboard/listing/{{$listing->id}}/show" method="POST">
                            @method('PATCH')
                            @csrf
                            <button type="submit" class="btn btn-success">Show My Listing</button> 
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
          

@endsection