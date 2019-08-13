@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-3"><span class="text-capitalize">{{$data['city']->name}} CPAs</h1>
        <p class="lead">Find a Certified Public Accountant in {{$data['city']->name}}, {{$data['state']->name}}</p>
    </div>
    <ul>
        @foreach($data['listings'] as $listing)
    <li><a href="/listings/{{$data['state']->slug}}/{{$data['city']->slug}}/{{$listing->id}}/{{$listing->slug}}">{{$listing->first_name}} {{$listing->last_name}}</a></li>  
        @endforeach
    </ul>
@endsection