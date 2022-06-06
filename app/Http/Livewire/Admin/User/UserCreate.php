<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\City;
use App\Models\User;
use App\Traits\ToastAlert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserCreate extends Component
{
    use WithFileUploads;
    use ToastAlert;

    public $countries;
    public $roles;
    public $cities = [];

    public $name, $username, $email, $countryId,
        $cityId, $roleId, $password, $password_confirmation, $profilePhotoPath;


    protected $listeners = ['showCreateModel'];

    public bool $showCreateModel = false;

    protected function rules()
    {
        return [
            'name' => ['required', 'string', 'max:50', 'min:5'],
            'username' => ['required', 'string', 'min:5', 'max:20', Rule::unique(User::class), 'regex:/^([a-z])+?(_)?([a-z0-9])+$/i'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(User::class)],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'countryId' => 'required|integer|exists:App\Models\Country,id',
            'cityId' => 'required|integer|exists:App\Models\City,id',
            'roleId' => 'required|integer|exists:App\Models\Role,id',
            'profilePhotoPath' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
        ];
    }

    public function mount($countries, $roles){
        $this->countries = $countries;
        $this->roles = $roles;
    }

    public function showCreateModel(){
        $this->showCreateModel = true;
    }

    public function closeCreateModel(){
        $this->showCreateModel = false;
        $this->resetExcept('countries','roles');
        $this->resetValidation();
        $this->resetErrorBag();
    }

    public function create(){
        $this->validate();

        $data = [
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role_id' => $this->roleId,
            'country_id' => $this->countryId,
            'city_id' => $this->cityId,
            'profile_photo_path' => $this->profilePhotoPath,
        ];

        if (!empty($this->profilePhotoPath)) {
            $url = $this->profilePhotoPath->store('profile-photos', 'public');
            $data['profile_photo_path'] = $url;
        }

        User::create($data);
        $this->closeCreateModel();
        $this->toast(__('user.create user'));
        $this->emit('refreshParent');

    }

    public function updatedCountryId($value){

        if (!empty($value)){
            $this->cities = City::where('country_id',$value)->pluck('name','id');
        }
    }

    public function updatedProfilePhotoPath()
    {
        $this->validate([
            'profilePhotoPath' => 'image|mimes:jpeg,png,jpg|max:1024',
        ]);
    }

    public function render()
    {
        return view('livewire.admin.user.user-create');
    }
}
