<?php

namespace App\Http\Livewire\Components\Users;

use App\Http\Traits\WithManageUser;
use App\Models\User;
use Livewire\Component;

class Listing extends Component
{
    use WithManageUser;

    public $users;

    protected $listeners = [
        'userCreated' => '$refresh'
    ];

    function mount()
    {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.components.users.listing');
    }
}
