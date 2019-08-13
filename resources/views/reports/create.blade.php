@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h1 class="display-3">Report a Review</h1>
    <p class="lead">When a review contains offensive content, we encourage users to file a report. Please provide the details of your report below. Your report is private, and never shared with anyone on the site.</p>
</div>
@include('partials.form-error-message')
<form action="/report/{{ $review->id }}/store" method="POST">
    <div class="container">
        <div class="col-md-4">
            <div class="form-group">
                <label for="reporter_first_name">First Name</label>
                <input type="text" class="form-control {{ $errors->has('reporter_first_name') ? 'is-invalid' : ''}}" name="reporter_first_name" id="reporter_first_name" value="{{old('reporter_first_name')}}" required>
            </div>
            <div class="form-group">
                <label for="reporter_last_name">Last Name</label>
                <input type="text" class="form-control {{ $errors->has('reporter_last_name') ? 'is-invalid' : ''}}" name="reporter_last_name" id="reporter_last_name" value="{{old('reporter_last_name')}}" required>
            </div>
            <div class="form-group">
                <label for="reporter_email">Email Address</label>
                <input type="email" class="form-control {{ $errors->has('reporter_email') ? 'is-invalid' : ''}}" name="reporter_email" id="reporter_email" value="{{old('reporter_email')}}" required>
            </div>
            <div class="form-group">
              <label for="reason">Reason for report</label>
              <select class="form-control {{ $errors->has('reason') ? 'is-invalid' : ''}}" name="reason" id="reason" required>
                <option disabled selected>Choose One</option>
                <option value="Racism">Racism</option>
                <option value="Foul Language">Foul Language</option>
                <option value="Spam">Spammy Content</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="form-group">
                <label for="report_comment">Comments</label>
                <textarea class="form-control {{ $errors->has('report_comment') ? 'is-invalid' : ''}}" name="report_comment" id="report_comment" rows="3">{{old('report_comment')}}</textarea>
            </div>
            
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            @csrf
            <input type="hidden" name="review_id" value="{{ $review->id }}">
        </div>
    </div>      
</form>

@endsection