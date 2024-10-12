<form wire:submit="save" class="col-md-8 mx-auto">
    <div class="card card-bordered">
        <div class="card-body">
            <div class="row row-cols-md-2 g-5">
                <div class="col-md-12">
                    <h4>Admission Information</h4>
                </div>

                <div class="col-md-8">
                    <x-input.label>School</x-input.label>
                    <x-input.select wire:model="school_id" placeholder="Select School" >
                        <option value=""></option>
                        @forelse ($schools as $school)
                            <option value="{{$school->id}}">{{$school->name}}</option>
                        @empty
                        @endforelse
                    </x-input.select>
                    <x-input.error key="school_id" />
                </div>

                <div class="col-md-4">
                    <x-input.label>Class</x-input.label>
                    <x-input.select wire:model="class_id" placeholder="Select Class" >
                        <option value=""></option>
                        @forelse ($classes as $class)
                            <option value="{{$class->id}}">{{$class->name}}</option>
                        @empty
                        @endforelse
                    </x-input.select>
                    <x-input.error key="school_id" />
                </div>
    
                <div class="col-md-4">
                    <x-input.label>Admission Date</x-input.label>
                    <x-input type="date" wire:model="admission_date" />
                    <x-input.error key="admission_date" />
                </div>
    
                <div class="col-md-4">
                    <x-input.label>Admission Number</x-input.label>
                    <x-input wire:model="admission_no" placeholder="Admission Number" />
                    <x-input.error key="admission_no" />
                </div>
    
                <div class="col-md-4">
                    <x-input.label>Roll Number</x-input.label>
                    <x-input wire:model="roll_no" placeholder="Roll Number" />
                    <x-input.error key="roll_no" />
                </div>
            </div>
        </div>
    </div>

    <div class="my-5"></div>

    <div class="card card-bordered">
        <div class="card-body">
            <div class="row row-cols-md-2 g-5">
                <div class="col-md-12">
                    <h4>Personal Information</h4>
                </div>

                <div>
                    <x-input.label>First Name</x-input.label>
                    <x-input wire:model="firstname" placeholder="First Name" />
                    <x-input.error key="firstname" />
                </div>
    
                <div>
                    <x-input.label>Last Name</x-input.label>
                    <x-input wire:model="lastname" placeholder="Last Name" />
                    <x-input.error key="lastname" />
                </div>
    
                <div class="col-md-4">
                    <x-input.label>Nationality</x-input.label>
                    <x-input wire:model="country" placeholder="Nationality" />
                    <x-input.error key="country" />
                </div>
    
                <div class="col-md-4">
                    <x-input.label>State of Origin</x-input.label>
                    <x-input wire:model="state" placeholder="State" />
                    <x-input.error key="state" />
                </div>
    
                <div class="col-md-4">
                    <x-input.label>Local Government Area</x-input.label>
                    <x-input wire:model="lga" placeholder="LGA" />
                    <x-input.error key="lga" />
                </div>
    
                <div>
                    <x-input.label>Gender</x-input.label>
                    <x-input.select wire:model="gender" placeholder="Gender" >
                        <option value=""></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </x-input.select>
                    <x-input.error key="gender" />
                </div>
                
                <div>
                    <x-input.label>Date of Birth</x-input.label>
                    <x-input type="date" wire:model="date_of_birth" value="{{today()->format('Y-m-d')}}" placeholder="Date of Birth" />
                    <x-input.error key="date_of_birth" />
                </div>
            </div>
        </div>
    </div>
    
    <div class="my-5"></div>

    <div class="card card-bordered">
        <div class="card-body">
            <div class="row row-cols-md-2 g-5">
                <div class="col-md-12">
                    <h4>Contact Information</h4>
                </div>

                <div>
                    <x-input.label>Email Address</x-input.label>
                    <x-input type="email" wire:model="email" placeholder="Email Address" />
                    <x-input.error key="email" />
                </div>
    
                <div>
                    <x-input.label>Phone Number</x-input.label>
                    <x-input wire:model="phone" placeholder="Phone Number" />
                    <x-input.error key="phone" />
                </div>
    
                <div class="col-md-12">
                    <x-input.label>Current Address</x-input.label>
                    <x-input.textarea wire:model="current_address" rows="2" style="resize: none;" placeholder="Current Address" />
                    <x-input.error key="current_address" />
                </div>
    
                <div class="col-md-12">
                    <x-input.label>Permanent Address</x-input.label>
                    <x-input.textarea wire:model="permanent_address" rows="2" style="resize: none;" placeholder="Permanent Address" />
                    <x-input.error key="permanent_address" />
                </div>
            </div>
        </div>
    </div>

    <div class="my-5"></div>

    <div class="card card-bordered">
        <div class="card-body">
            <div class="row row-cols-md-2 g-5">
                <div class="col-md-12">
                    <h4>Identity Documents</h4>
                </div>

                <div class="col-md-12" >
                    <x-input.label>Birth Certificate</x-input.label>
                    <x-input.file wire:model="birth_cert"  />
                    <x-input.error key="birth_cert" />
                </div>

                <div class="col-md-12" >
                    <x-input.label>Certificate of Origin</x-input.label>
                    <x-input.file wire:model="lga_cert" />
                    <x-input.error key="lga_cert" />
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="my-5"></div>

    <div class="card card-bordered">
        <div class="card-body">
            <div class="row row-cols-md-2 g-5">
                <div class="col-md-12">
                    <h4>Guardian(s) Information </h4>
                </div>

                <div class="col-md-12">
                    @include('livewire.students.partials.edit-guardians', ['name' => 'guardians'])
                </div>
            </div>
        </div>
    </div> --}}

    <div class="my-5"></div>

    <div class="card card-bordered">
        <div class="card-body">
            <div class="row row-cols-md-2 g-5">
                <div class="col-md-12">
                    <h4>Additional Information</h4>
                </div>

                <div class="col-md-12">
                    <x-input.label>Additional Notes</x-input.label>
                    <x-input.textarea wire:model="notes" rows="2" style="resize: none;" placeholder="Additional Notes" />
                    <x-input.error key="notes" />
                </div>
            </div>
        </div>
    </div>

    <div class="my-5"></div>

    <div class="d-flex justify-content-end">
        <x-button wire:target="save" wire:loading class="btn-primary">Save Details</x-button>
    </div>
</form>
