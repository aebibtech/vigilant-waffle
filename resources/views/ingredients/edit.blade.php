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
                    {{-- <input class="btn btn-success" type="submit" value="Save"> --}}
                    <button class="btn btn-success" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>