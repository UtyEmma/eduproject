<?php

namespace App\Livewire\AcademicYears;

use App\Concerns\Livewire\WithReload;
use App\Concerns\Livewire\WithToast;
use App\Models\AcademicYear;
use Livewire\Component;

class Edit extends Component {
    use WithToast, WithReload;

    public $modal;

    public $year, $title, $starts_at, $ends_at;

    public AcademicYear | null $academicYear = null;

    function mount(){
        if($this->academicYear) $this->fill($this->academicYear);
    }

    function rules(){
        return [
            'year' => "required|unique:academic_years,year|numeric|digits:4|min:2000|max:".now()->year,
            'title' => 'required|string',
            'starts_at' => 'required|date|before:ends_at',
            'ends_at' => 'required|date|after:starts_at',
        ];
    }

    function save(){
        $validated = $this->validate();
        $year = $this->academicYear?->update($validated) ?? AcademicYear::create($validated);
        $this->toast('Academic Year Saved Successfully', 'Success')->success();
        
        $this->reload();
    }

    public function render()
    {
        return view('livewire.academic-years.edit');
    }
}
