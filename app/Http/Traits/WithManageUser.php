<?php

namespace App\Http\Traits;

use App\Models\User;

trait WithManageUser
{
    public $selected_user;
    public $selected_user_id;

    protected $queryStringWithManageUser = [
        'selected_user_id' => ['except' => 'id'], // <----- Query String resets unnecessarily on $emit #4232
    ];


    function setSelectedUser($user_id = null)
    {
        $this->selected_user_id = $user_id;
        $this->selected_user = User::find($user_id);
        $this->emit('userSelected'); // <------- Query String resets unnecessarily on $emit #4232
    }
}
