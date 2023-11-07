@extends('layouts.recipes')
@section('content')
    <div>
        <h1 class="mb-5 d-flex justify-content-between">
            <span>Recipes</span>
            <a class="d-inline-block btn btn-success h-auto my-auto" href="" data-bs-toggle="modal" data-bs-target="#addRecipeModal">Add New</a>
        </h1>
    </div>
    <section class="row" id="recipes">
    </section>
    <script src="{{ URL::asset('js/load_recipes.js') }}"></script>
    @include('recipes.create')
@endsection
