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