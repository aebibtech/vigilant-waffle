@extends('layouts.users')
@section('content')
<div class="d-flex justify-content-center">
    <form class="p-5 bg-light bg-gradient rounded border border-2" action="{{ route('login') }}" method="POST">
        @csrf
        <h2 class="text-center mb-3">Recipe Book Login</h2>
        <div class="row mb-3">
            <div class="col"><input class="form-control" type="text" placeholder="Email" name="email"></div>
        </div>
        <div class="row mb-3">
            <div class="col"><input class="form-control" type="password" placeholder="Password" name="password"></div>
        </div>
        <div class="d-flex justify-content-between">
            <input class="btn btn-success" type="submit" value="Login">
            <a class="my-auto" href="{{ route('registerForm') }}">Register</a>
        </div>
        @if ($errors->any())
        <div class="text-danger mt-3">
            @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
            @endforeach
        </div>
        @endif
        @if (session('success'))
        <div class="text-success mt-3">{{ session('success') }}</div>
        @endif
    </form>
</div>
@endsection