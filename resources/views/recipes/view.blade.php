@extends('layouts.recipes')
@section('content')
<section class="row g-2">
    <h1 class="d-flex justify-content-between">
        <span>{{ $recipe->title }}</span>
        <span>
            <a class="btn btn-success" href="{{ route('edit.recipe', $recipe->id) }}">Edit</a>
            <a class="btn btn-danger" href="{{ route('delete.recipe', $recipe->id) }}">Delete</a>
        </span>
    </h1>
    <figure>
        <img class="rounded border border-2 img-fluid" src="{{ $recipe->image }}" alt="{{ $recipe->title }}">
        <figcaption>{{ $recipe->description }}</figcaption>
    </figure>
    <hr>
    <h2>Ingredients</h2>
    <div id="ingredients"></div>
    <hr>
    <h2>Instructions</h2>
    <div id="instructions"></div>
    <div class="d-none" id="recipe_id">{{ $recipe->id }}</div>
</section>
<script src="{{ URL::asset('js/load_recipe_data.js') }}"></script>
@endsection