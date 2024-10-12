<x-modal id="{{$modal}}" data-dismiss >
    <form wire:submit="save">
        <div class="mb-3">
            <x-input.label>Class Name</x-input.label>
            <x-input wire:model="name" placeholder="Class Name" />
            <x-input.error key="name" />
        </div>

        <div class="mb-3">
            <x-input.label>Class Type</x-input.label>
            <x-input.select wire:model="type" placeholder="Select Class Type" >
                <option value=""></option>
                @forelse ($classTypes as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                @empty
                @endforelse
            </x-input.select>
            <x-input.error key="type" />
        </div>

        <div class="mb-3">
            <x-input.label>Grade Level</x-input.label>
            <x-input wire:model="level" placeholder="Grade Level" />
            <x-input.error key="level" />
        </div>

        <div>
            <x-button wire:loading wire:target="save" class="btn-primary w-100" >Save Class</x-button>
        </div>
    </form>
</x-modal>
