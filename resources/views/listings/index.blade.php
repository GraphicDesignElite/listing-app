@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1 class="display-3">Listings</h1>
    <p class="lead">See All Current Listings</p>
</div>
<ul>
    @foreach ($listings as $listing)
        <li>
            <a href="/listings/{{$listing->id}}">
                <span class="name">{{$listing->first_name}}</span> <span class="name">{{$listing->last_name}}</span>
            </a>
        </li>
    @endforeach
</ul>

@endsection