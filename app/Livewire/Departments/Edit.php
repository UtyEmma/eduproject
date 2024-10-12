<?php

namespace App\Livewire\Departments;

use App\Concerns\Livewire\WithReload;
use App\Concerns\Livewire\WithToast;
use App\Models\Department;
use Livewire\Component;

class Edit extends Component {
    use WithToast, WithReload;

    public $modal;

    public $name;

    public Department | null $department = null;

    function mount(){
        if($this->department) {
            $this->fill($this->department);
        }
    }

    function rules(){
        return [
            'name' => 'required|string|unique:departments,name'
        ];
    }

    function save(){
        $validated = $this->validate();

        $this->department?->update($validated) ?? Department::create($validated);
        $this->toast('Department Saved Successfully!', 'Success')->success();
        $this->reload();
    }


    public function render()
    {
        return view('livewire.departments.edit');
    }
}
