@extends('layouts.recipes')
@section('content')
<h1 class="d-flex justify-content-between mb-5">
    <span>Edit Recipe</span>
    <a class="btn btn-link text-decoration-none" href="{{ route('recipes') }}">&#8592; Back to Recipe</a>
</h1>
<form class="container" action="{{ route('update.recipe', $recipe->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="row mb-3">
        <div class="col col-12 col-sm-12 col-md-3 col-lg-2">
            <label for="title">Recipe Name</label>
        </div>
        <div class="col col-12 col-sm-12 col-md-6 col-lg-4">
            <input class="form-control" type="text" name="title" id="title" placeholder="Recipe 1" value="{{ $recipe->title }}">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col col-12 col-sm-12 col-md-3 col-lg-2">
            <label for="description">Description</label>
        </div>
        <div class="col col-12 col-sm-12 col-md-6 col-lg-4">
            <input class="form-control" type="text" name="description" id="description" placeholder="Delicious recipe" value="{{ $recipe->description }}">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col col-12 col-sm-12 col-md-3 col-lg-2">
            <label for="image">Banner Image</label>
        </div>
        <div class="col col-12 col-sm-12 col-md-6 col-lg-4">
            <input class="form-control" type="file" name="image" id="image" accept="image/*" capture="environment" value="{{ $recipe->image }}">
        </div>
    </div>
    <div class="row mt-5">
        <input class="col col-12 col-sm-4 col-md-2 col-lg-2 col-xl-1 btn btn-success" type="submit" value="Save">
    </div>
    @if ($errors->any())
    <!--Toast-->
    <div class="toast fixed-top mx-auto bg-danger text-white" role="alert" data-animation="true" data-autohide="false" aria-live="assertive" aria-atomic="true">
        <div class="toast-body">
            @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
            @endforeach
        </div>
    </div>
    <!--Toast End-->
    <script>
        $(document).ready(function(){
            var toast = new bootstrap.Toast($('.toast'));
            toast.show();
        });
    </script>
    @endif
</form>
@endsection