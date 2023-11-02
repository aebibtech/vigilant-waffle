@extends('layouts.recipes')
@section('content')
    <section class="row g-2" id="recipes">
        <h1 class="mb-5 d-flex justify-content-between">
            <span>Recipes</span>
            <a class="btn btn-success" href="{{ route('new.recipe') }}">Add New</a>
        </h1>
    </section>
    <script src="{{ URL::asset('js/load_recipes.js') }}"></script>
@endsection
