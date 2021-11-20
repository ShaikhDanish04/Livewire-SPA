<?php

namespace App\Http\Livewire\Components\Users;

use App\Http\Traits\WithManageUser;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Manage extends Component
{
    use WithManageUser;

    protected $listeners = [
        'userSelected' => '$refresh'
    ];

    protected $rules = [
        'selected_user.name' => 'required',
        'selected_user.email' => 'required',
        'selected_user.password' => 'required',
    ];

    public function save()
    {
        $this->validate();
        $user = (empty($this->selected_user->id)) ? new User() : User::find($this->selected_user->id);
        $user->name = $this->selected_user['name'];
        $user->email = $this->selected_user['email'];
        $user->password = Hash::make($this->selected_user['password']);
        $user->save();
        $this->emit('userCreated');
    }

    public function render()
    {
        return view('livewire.components.users.manage');
    }
}
