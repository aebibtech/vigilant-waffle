@extends('layouts.recipes')
@section('content')
<?php $recipeOwner = $recipe->user->id == session('userId'); ?>
<section class="container">
    <h1 class="d-flex justify-content-between mb-5">
        <span>{{ $recipe->title }}</span>
        @if ($recipeOwner)
        <span>
            <a class="btn btn-success" href="" data-bs-toggle="modal" data-bs-target="#editRecipeModal">Edit</a>
            <a class="btn btn-danger" href="{{ route('delete.recipe', $recipe->id) }}">Delete</a>
        </span>
        @endif
    </h1>
    <figure class="row h-25">
        <img class="card-img-top" src="{{ $recipe->image }}" alt="{{ $recipe->title }}">
        <figcaption class="text-center mt-3">{{ $recipe->description }}</figcaption>
    </figure>
    <hr>
    <h2>Ingredients</h2>
    @if (count($recipe->ingredients) > 0)
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Unit</th>
                @if ($recipeOwner)
                <th>Actions</th>
                @endif
            </tr>
        </thead>
        <tbody>
        @foreach ($recipe->ingredients as $ingredient)
            <tr data-update="{{ route('update.ingredient', ['id' => $recipe->id, 'ingId' => $ingredient->id]) }}">
                <td>{{ $ingredient->name }}</td>
                <td>{{ $ingredient->quantity }}</td>
                <td>{{ $ingredient->unit }}</td>
                @if ($recipeOwner)
                <td><a class="btn btn-secondary edit-ingredient-btn" href="">Edit</a> <a class="btn btn-danger" href="{{ route('delete.ingredient', ['id' => $recipe->id, 'ingId' => $ingredient->id]) }}">Delete</a></td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
    @endif
    @if ($recipeOwner)
    <div><a class="btn btn-link text-decoration-none add-link" href="" data-bs-toggle="modal" data-bs-target="#addIngredientModal">+ Add Ingredient</a></div>    
    @endif
    <hr>
    <h2>Instructions</h2>
    @if (count($recipe->instructions) > 0)
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                @if ($recipeOwner)
                <th>Actions</th>
                @endif
            </tr>
        </thead>
        <tbody>
        @foreach ($recipe->instructions as $instruction)
            <tr data-update="{{ route('update.instruction', ['id' => $recipe->id, 'insId' => $instruction->id]) }}">
                <td>{{ $instruction->name }}</td>
                <td>{{ $instruction->description }}</td>
                @if ($recipeOwner)
                <td><a class="btn btn-secondary edit-instruction-btn" href="">Edit</a> <a class="btn btn-danger" href="{{ route('delete.instruction', ['id' => $recipe->id, 'ingId' => $instruction->id]) }}">Delete</a></td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
    @endif
    @if ($recipeOwner)
    <div><a class="btn btn-link text-decoration-none add-link" href="" data-bs-toggle="modal" data-bs-target="#addInstructionModal">+ Add Instruction</a></div>
    @endif
</section>

@if ($recipeOwner)
    @include('recipes.edit')
    @include('ingredients.create')
    @include('ingredients.edit')
    @include('instructions.create')
    @include('instructions.edit')
    @include('recipes.errors')

    <script>
        $(document).ready(function(){
            $('.add-link').click(function(e){
                e.preventDefault();
            });
            $('form').submit(function(){
                $(this).children('input[type="submit"]').html(
                    $('<div>').addClass('spinner-border text-light').attr('role', 'status').append($('<span>').addClass('visually-hidden').text('Loading...'))
                );
                $(this).children('input[type="submit"]').attr('disabled', true);
            });

        });

        $('.edit-ingredient-btn').click(function(e){
            e.preventDefault();
            var parent = $(this).parent().parent();
            var action = parent.attr('data-update');
            console.log(parent.children(), action);
            $('#nameEdit').val(parent.children()[0].textContent);
            $('#quantityEdit').val(parent.children()[1].textContent);
            $('#unitEdit').val(parent.children()[2].textContent);
            $('#ingredientEditForm').attr('action', action);
            var editModal = new bootstrap.Modal('#editIngredientModal');
            editModal.show();
        });

        $('.edit-instruction-btn').click(function(e){
            e.preventDefault();
            var parent = $(this).parent().parent();
            var action = parent.attr('data-update');
            console.log(parent.children(), action);
            $('#nameInstEdit').val(parent.children()[0].textContent);
            $('#descriptionInstEdit').val(parent.children()[1].textContent);
            $('#instructionEditForm').attr('action', action);
            var editModal = new bootstrap.Modal('#editInstructionModal');
            editModal.show();
        });
    </script>
@endif
@endsection