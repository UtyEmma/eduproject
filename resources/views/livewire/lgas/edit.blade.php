<x-modal id="edit-lgas" >
    <form wire:submit="save">
        <div class="mb-3">
            <x-input.label>Name</x-input.label>
            <x-input wire:model="name" placeholder="Local Government Name" />
            <x-input.error key="name" />
        </div>
        
        <div class="mb-3">
            <x-input.label>Headquarters</x-input.label>
            <x-input wire:model="capital" placeholder="Local Government Headquarters" />
            <x-input.error key="capital" />
        </div>

        <div>
            <x-button wire:loading wire:target="save" class="btn-primary w-full" >Save</x-button>
        </div>
    </form>
</x-modal>
