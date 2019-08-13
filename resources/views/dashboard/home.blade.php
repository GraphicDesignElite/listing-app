@extends('layouts.dashboard')

@section('dashboard')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif 
    <h1>Welcome back, {{ Auth::user()->first_name }}</h1>
    @if($listings->count())
        <h2>Manage your Listings</h2>
        <ul class="listing-selection">
            @foreach($listings as $listing)
                <li>
                    <a target="_blank" href="/listings/{{$listing->id}}/">{{$listing->first_name}} {{$listing->last_name}}</a>
                </li>
            @endforeach
        </ul>
    @else 
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Claim Your Listing!</h4>
            <p>In order to manage your listing on our site, you will need to claim your profile! To get started, click here to search for your profile.</p>
            <a name="claim-button" id="claim-button" class="btn btn-primary" href="/claim-my-profile/" role="button">Claim My Profile</a>
        </div>
    @endif
@endsection

