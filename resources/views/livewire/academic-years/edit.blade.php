<x-modal id="{{$modal}}" data-dismiss >
    <form wire:submit="save">
        <div class="mb-3">
            <x-input.label>Year</x-input.label>
            <x-input.years wire:model="year" placeholder="Select Year" />
            <x-input.error key="year" />
        </div>

        <div class="mb-3">
            <x-input.label>Title</x-input.label>
            <x-input wire:model="title" placeholder="2023/2024" />
            <x-input.error key="title" />
        </div>

        <div class="row row-cols-2 g-5">
            <div class="mb-3">
                <x-input.label>Start Date</x-input.label>
                <x-input type="date" wire:model="starts_at"  />
                <x-input.error key="starts_at" />
            </div>
            <div class="mb-3">
                <x-input.label>End Date</x-input.label>
                <x-input type="date" wire:model="ends_at" />
                <x-input.error key="ends_at" />
            </div>

        </div>

        <div>
            <x-button wire:loading wire:target="save" class="btn-primary w-100" >Save Academic Year</x-button>
        </div>
    </form>
</x-modal>
