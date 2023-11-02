@extends('layout')
@section('content')
<div class="d-flex justify-content-center">
    <form class="p-5 bg-light bg-gradient rounded" action="{{ route('register') }}" method="POST">
        @csrf
        <h2 class="text-center mb-3">Register to Recipe Book</h2>
        <div class="row mb-3">
            <div class="col"><input class="form-control" type="text" placeholder="Name" name="name"></div>
        </div>
        <div class="row mb-3">
            <div class="col"><input class="form-control" type="text" placeholder="Email" name="email"></div>
        </div>
        <div class="row mb-3">
            <div class="col"><input class="form-control" type="text" placeholder="Password" name="password"></div>
        </div>
        <div class="d-flex justify-content-between">
            <input class="btn btn-success" type="submit" value="Register">
            <a class="my-auto" href="{{ route('loginForm') }}">Login</a>
        </div>
        @if ($errors->any())
        <div class="text-danger mt-3">
            @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
            @endforeach
        </div>
        @endif
    </form>
</div>
@endsection