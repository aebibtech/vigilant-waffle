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