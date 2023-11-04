@extends('layouts.recipes')
@section('content')
<h1 class="d-flex justify-content-between mb-5">
    <span>Create New Recipe</span>
    <a class="btn btn-link" href="{{ route('recipes') }}">&#8592; Back to Recipes</a>
</h1>
<form class="container" action="{{ route('store.recipe') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col col-12 col-sm-12 col-md-3 col-lg-2">
            <label for="title">Recipe Name</label>
        </div>
        <div class="col col-12 col-sm-12 col-md-6 col-lg-4">
            <input class="form-control" type="text" name="title" id="title" placeholder="Recipe 1">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col col-12 col-sm-12 col-md-3 col-lg-2">
            <label for="description">Description</label>
        </div>
        <div class="col col-12 col-sm-12 col-md-6 col-lg-4">
            <input class="form-control" type="text" name="description" id="description" placeholder="Delicious recipe">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col col-12 col-sm-12 col-md-3 col-lg-2">
            <label for="image">Banner Image</label>
        </div>
        <div class="col col-12 col-sm-12 col-md-6 col-lg-4">
            <input class="form-control" type="file" name="image" id="image" accept="image/*" capture="environment">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col col-12 col-sm-12 col-md-3 col-lg-2">
            <label for="ingredients">Ingredients</label>
        </div>
        <div class="col col-12 col-sm-12 col-md-6 col-lg-4">
            <textarea class="form-control" name="ingredients" id="ingredients" placeholder="1/2 kilo sugar&#10;1 kilo pork" rows="10"></textarea>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col col-12 col-sm-12 col-md-3 col-lg-2">
            <label for="instructions">Instructions</label>
        </div>
        <div class="col col-12 col-sm-12 col-md-6 col-lg-4">
            <textarea class="form-control" name="instructions" id="instructions" placeholder="1. Instruction 1&#10;2. Instruction 2&#10;3. Instruction 3" rows="10"></textarea>
        </div>
    </div>
    <div class="row">
        <input class="col col-12 col-sm-4 col-md-2 col-lg-2 col-xl-1 btn btn-success" type="submit" value="Create">
    </div>
</form>
@endsection