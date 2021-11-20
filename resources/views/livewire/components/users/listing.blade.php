<div>
    <div class="card shadow">

        <div class="card-body" style="min-height: 500px">

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Name </th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    {{ $selected_user }}
                    <tbody>
                        @forelse ($users as $index =>$user)
                            <tr class="{{ ($selected_user->id ?? null) == $user->id ? 'alert-success' : '' }}">
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="text-nowrap">
                                    <button wire:click="setSelectedUser({{ $user->id }})" class="btn btn-sm mx-1 btn-warning">Edit</button>
                                    <button class="btn btn-sm mx-1 btn-danger">Delete</button>
                                </td>
                            </tr>
    
                        @empty
    
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
