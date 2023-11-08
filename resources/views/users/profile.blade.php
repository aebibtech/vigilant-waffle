@extends('layouts.recipes')
@section('content')
    <h1 class="d-flex justify-content-between">
        <span>{{ $user->name }}</span>
        <span>
            <a class="d-inline-block btn btn-success h-auto my-auto" href="" data-bs-toggle="modal" data-bs-target="#editProfileModal">Edit Profile</a>
            <a class="d-inline-block btn btn-danger h-auto my-auto" href="" data-bs-toggle="modal" data-bs-target="#editPasswordModal">Change Password</a>
        </span>
    </h1>
    <h2 class="lead mb-5"><span class="fw-normal">Member since:</span> {{ date_format($user->created_at, 'M d, Y') }}</h2>
    <h3 class="h2 mb-3">Your Recipes</h3>
    <div id="recipeList"></div>
    <div class="d-none" id="u">{{ $user->id }}</div>
    <script>
        $(document).ready(function(){
            $.get('/recipetable?id=' + $('#u').text(), function(res){
                $('#recipeList').html(res);
            });
        });
    </script>
    @include('users.edit')
    @include('users.changepassword')
    @include('users.flash')
@endsection