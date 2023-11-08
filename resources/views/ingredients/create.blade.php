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