<x-modal id="{{$modal}}" data-dismiss >
    <form wire:submit="save">
        <div class="mb-3">
            <x-input.label>Name</x-input.label>
            <x-input wire:model="name" placeholder="Subject Name" />
            <x-input.error key="name" />
        </div>

        <div class="mb-3">
            <x-input.label>Departments</x-input.label>
            <x-input.select wire:model="department_id" placeholder="Select Departments" >
                <option value=""></option>
                @forelse ($departments as $department)
                    <option value="{{$department->id}}">{{$department->name}}</option>
                @empty
                @endforelse
            </x-input.select>
            <x-input.error key="department_id" />
        </div>

        <div class="mb-3">
            {{-- <x-input.label>Ele</x-input.label> --}}
            <x-input.switch wire:model="is_optional">Is Elective</x-input.switch>
            <x-input.error key="is_optional" />
        </div>

        <div>
            <x-button wire:loading wire:target="save" class="btn-primary w-100" >Save Subject</x-button>
        </div>
    </form>
</x-modal>
