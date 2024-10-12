<x-modal id="{{$modal}}" data-dismiss >
    <form wire:submit="save">
        <div class="mb-3">
            <x-input.label>Department Name</x-input.label>
            <x-input wire:model="name" placeholder="Department Name" />
            <x-input.error key="name" />
        </div>
        
        <div>
            <x-button wire:loading wire:target="save" class="btn-primary w-100" >Save</x-button>
        </div>
    </form>
</x-modal>
