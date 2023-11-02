@extends('layouts.recipes')
@section('content')
    <section class="row g-2" id="recipes">
        <h1 class="mb-5">Recipes</h1>
    </section>
    <script src="{{ URL::asset('js/load_recipes.js') }}"></script>
@endsection
