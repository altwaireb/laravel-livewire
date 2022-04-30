<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class UserShow extends Component
{

    public $showItemModel = false;
    public $itemId;
    public $item;

    protected $listeners = ['showItemModel'];

    public function showItemModel($itemId){
        $this->itemId = $itemId;
        $this->showItemModel = true;
        $this->item = User::with('country','city','role')->find($this->itemId);

    }
    
    public function closeItemModel(){
        $this->showItemModel = false;
        $this->reset();
    }


    public function render()
    {
        return view('livewire.admin.user.user-show');
    }
}
