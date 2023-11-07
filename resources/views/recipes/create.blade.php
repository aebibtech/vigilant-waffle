<div class="modal fade" id="addRecipeModal" tabindex="-1" aria-labelledby="addRecipeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addRecipeModalLabel">Add Recipe</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('store.recipe') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <input class="form-control" type="text" name="title" id="title" placeholder="Recipe 1">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="description" id="description" placeholder="Delicious recipe" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="file" name="image" id="image" accept="image/*" capture="environment">
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-success" type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
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