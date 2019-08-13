@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4 col-md-3 col-xl-2">
            <div class="list-group">
                <a href="/dashboard" class="list-group-item list-group-item-action">Manage Your Listings</a>
                <a href="/dashboard" class="list-group-item list-group-item-action">My Reviews</a>
                <a href="/dashboard" class="list-group-item list-group-item-action">Answered Questions</a>
                <a href="/dashboard" class="list-group-item list-group-item-action">Profile Stats</a>
                <a href="/dashboard/my-account/" class="list-group-item list-group-item-action">Account Details</a>
                <a class="list-group-item list-group-item-action" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Logout</a>    
                @include('partials.logout-form-hidden')
            </div>
        </div>
        <div class="col-sm-8 col-md-9 col-xl-10">
            @yield('dashboard')
        </div>
    </div>
</div>    


    
    

@endsection

