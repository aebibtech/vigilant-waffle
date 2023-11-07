@extends('layouts.recipes')
@section('content')
<section class="container">
    <h1 class="d-flex justify-content-between">
        <span>{{ $recipe->title }}</span>
        <span>
            <a class="btn btn-success" href="" data-bs-toggle="modal" data-bs-target="#editRecipeModal">Edit</a>
            <a class="btn btn-danger" href="{{ route('delete.recipe', $recipe->id) }}">Delete</a>
        </span>
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
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($recipe->ingredients as $ingredient)
            <tr data-update="{{ route('update.ingredient', ['id' => $recipe->id, 'ingId' => $ingredient->id]) }}">
                <td>{{ $ingredient->name }}</td>
                <td>{{ $ingredient->quantity }}</td>
                <td>{{ $ingredient->unit }}</td>
                <td><a class="btn btn-secondary edit-ingredient-btn" href="">Edit</a> <a class="btn btn-danger" href="{{ route('delete.ingredient', ['id' => $recipe->id, 'ingId' => $ingredient->id]) }}">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @endif
    <div><a class="btn btn-link text-decoration-none add-link" href="" data-bs-toggle="modal" data-bs-target="#addIngredientModal">+ Add Ingredient</a></div>
    <hr>
    <h2>Instructions</h2>
    @if (count($recipe->instructions) > 0)
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($recipe->instructions as $instruction)
            <tr data-update="{{ route('update.instruction', ['id' => $recipe->id, 'insId' => $instruction->id]) }}">
                <td>{{ $instruction->name }}</td>
                <td>{{ $instruction->description }}</td>
                <td><a class="btn btn-secondary edit-instruction-btn" href="">Edit</a> <a class="btn btn-danger" href="{{ route('delete.instruction', ['id' => $recipe->id, 'ingId' => $instruction->id]) }}">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @endif
    <div><a class="btn btn-link text-decoration-none add-link" href="" data-bs-toggle="modal" data-bs-target="#addInstructionModal">+ Add Instruction</a></div>
</section>

<div class="modal fade" id="editRecipeModal" tabindex="-1" aria-labelledby="editRecipeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editRecipeModalLabel">Edit Recipe</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('update.recipe', $recipe->id) }}" method="POST" id="recipeEditForm">
                @method('PATCH')
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <input class="form-control" type="text" name="title" id="title" placeholder="Recipe 1" value="{{ $recipe->title }}">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="description" id="description" placeholder="Delicious recipe" value="{{ $recipe->description }}">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="file" name="image" id="image" accept="image/*" capture="environment" value="{{ $recipe->image }}">    
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-success" type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="addIngredientModal" tabindex="-1" aria-labelledby="addIngredientModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addIngredientModalLabel">Add Ingredient</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('store.ingredient', $recipe->id) }}" method="POST" id="ingredientForm">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <input class="form-control" type="text" name="name" id="name" placeholder="Ingredient Name">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="quantity" id="quantity" placeholder="Quantity">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="unit" id="unit" placeholder="Unit">
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-success" type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editIngredientModal" tabindex="-1" aria-labelledby="editIngredientModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editIngredientModalLabel">Edit Ingredient</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="ingredientEditForm">
                @method('PATCH')
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <input class="form-control" type="text" name="name" id="nameEdit" placeholder="Ingredient Name">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="quantity" id="quantityEdit" placeholder="Quantity">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="unit" id="unitEdit" placeholder="Unit">
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-success" type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="addInstructionModal" tabindex="-1" aria-labelledby="addInstructionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addInstructionModalLabel">Add Instruction</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('store.instruction', $recipe->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <input class="form-control" type="text" name="name" id="nameInst" placeholder="Instruction Title">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="description" id="descriptionInst" placeholder="Description" rows="10"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-success" type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editInstructionModal" tabindex="-1" aria-labelledby="editInstructionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editInstructionModalLabel">Edit Instruction</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="instructionEditForm">
                @method('PATCH')
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <input class="form-control" type="text" name="name" id="nameInstEdit" placeholder="Instruction Title">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="description" id="descriptionInstEdit" placeholder="Description" rows="10"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-success" type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.add-link').click(function(e){
            e.preventDefault();
        });
        $('form').submit(function(){
            $('input[type="submit"]').attr('disabled', true);
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

@if ($errors->any())
<!--Toast-->
<div class="toast fixed-top mx-auto bg-danger text-white" role="alert" data-animation="true" data-autohide="false" aria-live="assertive" aria-atomic="true">
    <div class="toast-body">
        <div class="fw-bold">Errors</div>
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
@endsection