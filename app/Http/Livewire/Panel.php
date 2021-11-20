<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Panel extends Component
{
    protected $listeners = [
        'load',
    ];

    public $page;

    // OPERATION FN() ------------------------------------------------------------------------------------------------------
    public function load($page, $data = [])
    {
        $this->page = $this->check($page);
        $this->data = $data;
    }


    // HELPER FN() -------------------------------------------------------------------------------------------------------
    function check($page)
    {
        if (empty($page)) $page = '';
        $pages = [
            '',
            'dashboard',
            'about',
            'contact',
            'users',
        ];

        if (array_search($page, $pages) !== false || empty($page)) {
            $this->page = $page;
        } else {
            redirect()->route('panel');
        }
        return $this->page;
    }

    // LIVEWIRE FN()------------------------------------------------------------------------------------------------------
    function mount($page, $data = [])
    {
        $this->page = $this->check($page);
    }

    public function render()
    {
        return view('livewire.panel')->layout('livewire.layouts.panel');
    }
}
