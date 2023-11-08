<div class="modal fade" id="editPasswordModal" tabindex="-1" aria-labelledby="editPasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editPasswordModalLabel">Change Password</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('update.password', $user->id) }}" method="POST" id="passwordEditForm">
                @method('PATCH')
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <input class="form-control" type="password" name="old_password" id="old_password" placeholder="Current Password">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="password" name="password" id="new_password" placeholder="New Password">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="password" name="password_confirmation" id="confirm_password" placeholder="Confirm New Password">
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-danger" type="submit" value="Change">
                </div>
            </form>
        </div>
    </div>
</div>