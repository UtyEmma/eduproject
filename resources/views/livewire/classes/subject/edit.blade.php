<x-modal id="{{$modal}}" data-dismiss >
    <form wire:submit="save">
        <div class="mb-3">
            <x-input.label>Select Subject</x-input.label>
            <x-input.select wire:model="subject_id" placeholder="Select Subject" >
                <option value=""></option>
                @forelse ($subjects as $subject)
                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                @empty
                @endforelse
            </x-input.select>
            <x-input.error key="subject_id" />
        </div>

        <div class="mb-3">
            <x-input.switch wire:model="is_elective">Is Elective</x-input.switch>
            <x-input.error key="is_elective" />
        </div>

        <div>
            <x-button wire:loading wire:target="save" class="btn-primary w-100" >Save Subject</x-button>
        </div>
    </form>
</x-modal>
