@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-3"><span class="text-capitalize">View All States</h1>
        <p class="lead">Select Your State to Continue</p>
    </div>
    <ul>
    @foreach($states as $state)
        <li><a href="/listings/search/{{$state->slug}}">{{$state->name}}</a></li>
        @if ($loop->iteration % round($loop->count/4) == 0)
    </ul>
    <ul>
        @endif
    @endforeach
    </ul>
@endsection