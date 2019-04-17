@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1 class="display-3">CPA Listings</h1>
    <p class="lead">See All Current Listings</p>
</div>
<ul>
    @foreach ($listings as $listing)
        <li><a href="/cpa-listings/{{$listing->id}}">{{$listing->title}}</a></li>
    @endforeach
</ul>

@endsection