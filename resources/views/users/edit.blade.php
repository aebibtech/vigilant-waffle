<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editInstructionModalLabel">Edit Profile</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('update.user', $user->id) }}" method="POST" id="profileEditForm">
                @method('PATCH')
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <input class="form-control" type="text" name="name" id="name" placeholder="Name" value="{{ $user->name }}">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" id="email" placeholder="jd@example.com" disabled value="{{ $user->email }}">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="password" name="password" id="password" placeholder="Current Password">
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-success" type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>