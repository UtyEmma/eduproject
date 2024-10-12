<?php

namespace App\Livewire\Admins;

use App\Concerns\Livewire\WithToast;
use App\Enums\Role;
use App\Library\Token;
use App\Models\School;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;
use Livewire\Component;

class Edit extends Component {
    use WithToast;

    public $modal;
    public User $user;

    public $firstname, $lastname, $role, $email, $school_id, $phone;

    public $schools = [];
    public $roles = [];

    function mount(){
        $this->schools = School::all();
        $this->roles = Role::options();
    }

    function rules(){
        return [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'role' => ['required', new Enum(Role::class)],
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'school_id' => [Rule::requiredIf(function(){
                return in_array($this->role, [Role::TEACHER->value, Role::ADMIN->value]);
            }), 'exists:schools,id']
        ];
    }

    function save(){
        $validated = $this->validate();
        $validated['password'] = Token::text();
        User::create($validated);
        $this->toast('Staff Account Created Successfully', 'Success')->success();
        return $this->redirect(route('admins'));
    }

    public function render()
    {
        return view('livewire.admins.edit');
    }
}
