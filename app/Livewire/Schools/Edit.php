<?php

namespace App\Livewire\Schools;

use App\Concerns\Livewire\WithToast;
use App\Models\LocalGovernment;
use App\Models\School;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component  {
    use WithToast, WithFileUploads;

    public $modal;

    public $name, $address, $email, $logo, $phone, $lga;

    public Collection $lgas;

    function mount(){
        $this->lgas = LocalGovernment::all();
        $this->lga = $this->lgas->first()->id;
    }

    function rules(){
        return [
            'name' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|string|unique:schools,email',
            'phone' => 'required|numeric|digits:11',
            'lga' => ['required', 'exists:local_governments,id']
        ];
    }

    function save(){
        $validated = $this->validate();

        $lga = LocalGovernment::with('zone')->find($this->lga);
        $validated['lga_id'] = $lga->id;
        $validated['zone_id'] = $lga->zone_id;
        
        $lga->schools()->create($validated);

        $this->toast('School Updated Successfully', 'Action Successful')->success();
    }

    public function render()
    {
        return view('livewire.schools.edit');
    }
}
