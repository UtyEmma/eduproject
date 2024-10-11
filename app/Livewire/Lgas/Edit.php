<?php

namespace App\Livewire\Lgas;

use App\Concerns\Livewire\WithToast;
use App\Models\LocalGovernment;
use App\Models\Zone;
use Livewire\Component;

class Edit extends Component {
    use WithToast;

    public $name, $capital;

    public LocalGovernment $localGovernment;
    public Zone $zone;

    function rules(){
        return [
            'name' => ['required', 'string'],
            'capital' => ['required', 'string'],
        ];
    }

    function save(){
        $validated = $this->validate();
        $this->zone->lgas()->create($validated);
        $this->toast('Local Government Saved Successfully')->success();
    }

    public function render()
    {
        return view('livewire.lgas.edit');
    }
}
