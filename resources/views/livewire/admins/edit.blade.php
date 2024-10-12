<x-modal id="{{$modal}}" data-dismiss >
    <form wire:submit="save">
        <div class="row row-cols-2 g-5">
            <div >
                <x-input.label>First Name</x-input.label>
                <x-input wire:model="firstname" placeholder="FIrst Name" />
                <x-input.error key="firstname" />
            </div>

            <div >
                <x-input.label>Last Name</x-input.label>
                <x-input wire:model="lastname" placeholder="Last Name" />
                <x-input.error key="lastname" />
            </div>

            <div class="col-md-12" >
                <x-input.label>Select Role</x-input.label>
                <x-input.select wire:model="role" parent="{{$modal}}" placeholder="Select Role" >
                    <option value=""></option>
                    @forelse ($roles as $key => $option)
                        <option value="{{$key}}">{{$option}}</option>
                    @empty
                    @endforelse
                </x-input.select>
                <x-input.error key="role" />
            </div>

            <div class="col-md-12" >
                <x-input.label>Select School</x-input.label>
                <x-input.select  parent="{{$modal}}" wire:model="school_id" placeholder="Select School" >
                    <option value=""></option>
                    @forelse ($schools as $school)
                        <option value="{{$school->id}}">{{$school->name}}</option>
                    @empty
                    @endforelse
                </x-input.select>
                <x-input.error key="role" />
            </div>

            <div class="col-md-12">
                <x-input.label>Email Address</x-input.label>
                <x-input wire:model="email" placeholder="Email Address" />
                <x-input.error key="email" />
            </div>
    
            <div class="col-md-12">
                <x-input.label>Phone Number</x-input.label>
                <x-input wire:model="phone" placeholder="Phone Number" />
                <x-input.error key="phone" />
            </div>
            <div class="col-md-12">
                <x-button wire:loading wire:target="save" class="btn-primary w-100" >Save</x-button>
            </div>
        </div>
    </form>
</x-modal>
