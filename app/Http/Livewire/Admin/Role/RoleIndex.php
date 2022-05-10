<?php

namespace App\Http\Livewire\Admin\Role;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class RoleIndex extends Component
{
    use WithPagination;

    public ?string $term = null;
    public string $orderBy = 'id';
    public string $sortBy = 'asc';
    public int $perPage = 10;
    public bool $trashed = false;
    public $permissionSearch;


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
        $roles = Role::query();
        // * Search
        if (!empty($this->term)&& $this->term != null){
            $roles = $roles->search(trim($this->term));
        }
        // * Trashed
        if ($this->trashed){
            $roles = $roles->onlyTrashed()->withCount('userTrashed');
        }else{
            $roles = $roles->withCount('user');
        }

        if ($this->permissionSearch){
            $roles = $roles->whereHas('permission' ,function (Builder $query){
                $query->where('id', $this->permissionSearch);
            });
        }


        $roles = $roles->orderBy($this->orderBy, $this->sortBy)->paginate($this->perPage);

        return $roles;

    }

    public function render()
    {
        return view('livewire.admin.role.role-index',[
            'roles' => $this->readyToLoad ? $this->getItem() : [],
            'permissions' => Permission::select('id','name','table_name')->get()
        ])->layout('layouts.admin');
    }
}
