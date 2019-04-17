@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-3">{{ $listing->title }}</h1>
        <p class="lead">{{ $listing->description }}</p>
        <a name="edit" id="edit" class="btn btn-primary" href="{{$listing->id}}/edit" role="button">Edit Listing</a>
    </div>

    <!--app('googlemaps')->getKey() -->


    <div class="col-md-4">
        @include('partials.error-message')
        <div class="create-review">
            <form action="/listings/{{$listing->id}}/review" method="POST">
                @csrf
                
                <div class="form-group">
                  <label for="rating">Select Your Rating</label>
                  <input type="number" class="form-control" name="rating" id="rating" aria-describedby="helpId" min="1" max="5" required>
                </div>
                <div class="form-group">
                  <label for="service_reviewed">What service are you reviewing?</label>
                  <select class="form-control" name="service_reviewed" id="service_reviewed" required>
                    <option value="" disabled selected>Choose one:</option>
                    <option value="Individual Tax Returns">Individual Tax Returns</option>
                    <option value="Audit Assistance">Audit Assistance</option>
                    <option value="Tax Audit">Tax Audit</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="review_text">Your Review</label>
                  <textarea class="form-control" name="review_text" id="review_text" rows="5" placeholder="Your review will help others learn about your accountant." required></textarea>
                </div>
                <div class="form-group">
                    <label for="reviewer_first_name">First Name</label>
                    <input type="text" class="form-control" name="reviewer_first_name" id="reviewer_first_name" aria-describedby="helpId" required>
                </div>
                <div class="form-group">
                        <label for="reviewer_last_name">Last Name</label>
                        <input type="text" class="form-control" name="reviewer_last_name" id="reviewer_last_name" aria-describedby="helpId" required>
                        <small id="helpId" class="form-text text-muted">This will not be displayed or shared.</small>
                    </div>
                <div class="form-group">
                    <label for="reviewer_name">Email Address</label>
                    <input type="email" class="form-control" name="reviewer_email" id="reviewer_email" aria-describedby="helpId" required>
                    <small id="helpId" class="form-text text-muted">This will not be displayed or shared.</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit Your Review</button>
                <input type="hidden" name="cpa_listing_id" value="{{$listing->id}}">
                <input type="hidden" name="review_type" value="c2p">
            </form>
        </div>
    </div>
    <hr>
    @if($listing->reviews->count())
    
    @foreach ($listing->reviews as $review)
        <div class="review-block">
            <div class="star-rating">
                {{ $review->rating}} | {{$review->service_reviewed}}
            </div>
            
            <div class="review-time">
                <small>Reviewed on {{ $review->created_at->format('m/d/y' ) }}</small>
            </div>
            <div class="review-name">
                By <strong>{{ $review->reviewer_first_name}} {{ $review->reviewer_last_name[0]}}.</strong>
            </div>
           
            <div class="review-text">
                <p>{{ $review->review_text}}</p>
            </div>
            <a name="report" id="report" class="btn btn-primary" href="/report/{{ $review->id }}/create" role="button">Create Report</a>
        </div>
        
    @endforeach
    @else
        <div class="alert alert-secondary">
            No Reviews Found.
        </div>
    @endif

@endsection