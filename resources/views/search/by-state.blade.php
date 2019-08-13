@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-3"><span class="text-capitalize">{{$data['state']->name}} CPAs</h1>
        <p class="lead">Find a Certified Public Accountant in {{$data['state']->name}}</p>
    </div>
    <ul>
        @foreach($data['cities'] as $city)
            <li><a href="/listings/search/{{$data['state']->slug}}/{{$city->slug}}">{{$city->name}}</a></li>  
        @endforeach
    </ul>
@endsection