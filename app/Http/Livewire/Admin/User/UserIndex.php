<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\Country;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserIndex extends Component
{
    use WithPagination;

    public ?string $term = null;
    public string $orderBy = 'id';
    public string $sortBy = 'asc';
    public int $perPage = 10;
    public bool $trashed = false;
    public ?string $country = null;
    public ?string $role = null;

    protected $listeners = [ 'refreshParent' => '$refresh'];

    public $readyToLoad = false;

    public function loadItems()
    {
        $this->readyToLoad = true;
    }

    public function updatingTerm(){
       $this->resetPage();
    }

    public function updatingOrderBy(){
        $this->resetPage();
    }

    public function updatingSortBy(){
        $this->resetPage();
    }

    public function updatingPerPage(){
        $this->resetPage();
    }

    public function updatingTrashed(){
        $this->resetPage();
    }

    public function updatingCountry(){
        $this->resetPage();
    }

    public function updatingRole(){
        $this->resetPage();
    }



    public function selectedItem($action ,$itemId = null){
        if ($action == 'create'){
            $this->emit('showCreateModel');
        }elseif ($action == 'update'){
            $this->emit('showUpdateModel', $itemId);
        }elseif ($action == 'show'){
            $this->emit('showItemModel', $itemId);
        }elseif ($action == 'delete'){
            $this->emit('showDeleteModel', $itemId);
        }elseif ($action == 'restore'){
            $this->emit('showRestoreModel', $itemId);
        }elseif ($action == 'forceDelete'){
            $this->emit('showForceDeleteModel', $itemId);
        }
    }



    public function getItem(){
        $users = User::query();
        // * Search
        if (!empty($this->term)&& $this->term != null){
            $users = $users->search(trim($this->term));
        }
        // * Trashed
        if ($this->trashed){
            $users = $users->onlyTrashed();
        }

        $users = $users->with(['role:id,name,color','country:id,name']);

        if (!empty($this->country)){
            $users = $users->where('country_id',$this->country);
        }

        if (!empty($this->role)){
            $users = $users->where('role_id',$this->role);
        }

        $users = $users->orderBy($this->orderBy, $this->sortBy)->paginate($this->perPage);

        return $users;

    }


    public function render()
    {
        return view('livewire.admin.user.user-index',[
            'users' => $this->readyToLoad ? $this->getItem() : [],
            'roles' => Role::all()->pluck('name', 'id'),
            'countries' => Country::all()->pluck('name' , 'id')
        ])->layout('layouts.admin');
    }
}
