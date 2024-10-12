<?php

namespace App\Livewire\Subjects;

use App\Concerns\Livewire\WithReload;
use App\Concerns\Livewire\WithToast;
use App\Models\Department;
use App\Models\Subject;
use Livewire\Component;

class Edit extends Component {
    use WithToast, WithReload;

    public $modal;

    public $name, $department_id, $is_optional;

    public Subject | null $subject = null;

    public $departments = [];

    function mount(){
        $this->departments = Department::all();
        if($this->subject) $this->fill($this->subject);
    }

    function rules(){
        return [
            'name' => 'required|string|unique:departments,name',
            'department_id' => 'required|exists:departments,id',
            'is_optional' => 'nullable'
        ];
    }

    function save(){
        $validated = $this->validate();
        $this->subject?->update($validated) ?? Subject::create($validated);

        $this->toast('Subject Saved Successfully', 'Success')->success();
        $this->reload();
    }

    public function render()
    {
        return view('livewire.subjects.edit');
    }
}
