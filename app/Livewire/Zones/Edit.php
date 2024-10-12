<?php

namespace App\Livewire\Zones;

use App\Concerns\Livewire\WithToast;
use App\Models\Zone;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Edit extends Component {
    use WithToast;

    public $modal;
    public $name;
    public Zone $zone;

    function mount(){
        if(isset($this->zone)) {
            $this->fill($this->zone);
        }
    }

    function rules(){
        return [
            'name' => [
                'required', 
                'string', 
                Rule::unique('zones', 'name')
                    ->when(isset($this->zone), function($query){
                        return $query->ignore($this->zone->id, 'id');
                    })
            ]
        ];
    }

    function save(){
        $validated = $this->validate();
        $zone = isset($this->zone) ? $this->zone->fill($validated) : new Zone($validated);
        $zone->save();
        $this->toast('Zone Saved Successfully!', 'Success')->success();
        $this->redirect(route('zones'));
    }

    public function render() {
        return view('livewire.zones.edit');
    }
}
