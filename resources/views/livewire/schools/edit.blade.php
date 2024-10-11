<x-modal id="{{$modal}}" data-dismiss >
    <form wire:submit="save">
        <div class="mb-3">
            <x-input.label>Name</x-input.label>
            <x-input wire:model="name" placeholder="School Name" />
            <x-input.error key="name" />
        </div>
        
        <div class="mb-3">
            <x-input.label>Select LGA</x-input.label>
            <x-input.select wire:model="lga" placeholder="Select LGA" >
                @forelse ($this->lgas as $option)
                    <option value="{{$option->id}}">{{$option->name}}</option>
                @empty
                @endforelse
            </x-input.select>
            <x-input.error key="lga" />
        </div>

        <div class="mb-3">
            <x-input.label>Email Address</x-input.label>
            <x-input wire:model="email" placeholder="Email Address" />
            <x-input.error key="email" />
        </div>

        <div class="mb-3">
            <x-input.label>Phone Number</x-input.label>
            <x-input wire:model="phone" placeholder="Phone Number" />
            <x-input.error key="phone" />
        </div>

        <div class="mb-3">
            <x-input.label>Address</x-input.label>
            <x-input wire:model="address" placeholder="Address" />
            <x-input.error key="address" />
        </div>

        <div>
            <x-button wire:loading wire:target="save" class="btn-primary w-100" >Save</x-button>
        </div>
    </form>
</x-modal>
