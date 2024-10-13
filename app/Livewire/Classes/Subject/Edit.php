<?php

namespace App\Livewire\Classes\Subject;

use App\Concerns\Livewire\WithReload;
use App\Concerns\Livewire\WithToast;
use App\Models\Classes;
use App\Models\Subject;
use Livewire\Component;

class Edit extends Component {
    use WithReload, WithToast;

    public $modal;

    public Classes $class;

    public $subject_id, $is_elective;

    public $subjects = [];

    public function mount(){
        $this->subjects = Subject::all();
    }

    function save(){
        $validated = $this->validate([
            'subject_id' => 'required|string|exists:subjects,id',
            'is_elective' => 'nullable'
        ]);

        $this->class->subjects()->create($validated);
        $this->toast('Subject Added Successfully', 'Success')->success();
        
        $this->reload();
    }

    public function render()
    {
        return view('livewire.classes.subject.edit');
    }
}
