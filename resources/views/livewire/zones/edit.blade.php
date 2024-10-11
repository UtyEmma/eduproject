<x-modal id="edit-zone" >
    <form wire:submit="save">
        <div class="mb-3">
            <x-input.label>Zone Name</x-input.label>
            <x-input wire:model="name" />
            <x-input.error key="name" />
        </div>

        <div>
            <x-button wire:loading wire:target="save" class="btn-primary w-full" >Update Zone</x-button>
        </div>
    </form>
</x-modal>
