<?php

namespace App\Http\Livewire\Admin\Admin;

use Livewire\Component;

class AdminIndex extends Component
{

    public function render()
    {
        return view('livewire.admin.admin.admin-index')->layout('layouts.admin');
    }

}
