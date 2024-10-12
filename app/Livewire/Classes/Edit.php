<?php

namespace App\Livewire\Classes;

use App\Concerns\Livewire\WithReload;
use App\Concerns\Livewire\WithToast;
use App\Enums\ClassType;
use App\Models\Classes;
use App\Models\SchoolClass;
use Illuminate\Validation\Rules\Enum;
use Livewire\Component;

class Edit extends Component {
    use WithToast, WithReload;

    public $modal;

    public $name, $level, $type;

    public $classTypes;

    public Classes | null $class = null;

    function mount(){
        $this->classTypes = ClassType::options();
        if($this->class) {
            $this->fill($this->class);
        }
    }

    function rules(){
        return [
            'name' => 'required|string',
            'level' => 'required|numeric',
            'type' => ['required', new Enum(ClassType::class)]
        ];
    }

    function save(){
        $validated = $this->validate();

        $class = $this->class ?: new Classes();

        $class->fill($validated)->save();

        $this->toast('Class Created Successfully!', 'Success')->success();
        return $this->reload();
    }


    public function render()
    {
        return view('livewire.classes.edit');
    }
}
