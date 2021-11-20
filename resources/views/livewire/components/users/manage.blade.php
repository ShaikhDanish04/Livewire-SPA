<div>

    <div class="card shadow">
        <div class="card-body">
            <form wire:submit.prevent="save">

                {{$selected_user_id}}
                <p class="h3">Create User</p>
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" wire:model.lazy="selected_user.name" class="form-control" placeholder="Name">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" wire:model.lazy="selected_user.email" class="form-control" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" wire:model.lazy="selected_user.password" class="form-control" placeholder="Password">
                </div>
                <div class="">
                    <button class="btn btn-success w-100">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
