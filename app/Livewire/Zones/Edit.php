<?php

namespace App\Livewire\Zones;

use App\Models\Zone;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Edit extends Component {

    public $name;
    public Zone $zone;

    function rules(){
        return [
            'name' => ['required', 'string', Rule::unique('zones', 'name')->ignore($this->zone?->name)]
        ];
    }

    function save(){
        $validated = $this->validate();
        $zone = Zone::create($validated);
    }

    public function render() {
        return view('livewire.zones.edit');
    }
}
