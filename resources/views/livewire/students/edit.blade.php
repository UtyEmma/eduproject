<div>
    <div class="row">
        <div class="col-md-6">
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
            
                        <div>
                            <x-input.label>State of Origin</x-input.label>
                            <x-input wire:model="state" placeholder="State" />
                            <x-input.error key="state" />
                        </div>
            
                        <div>
                            <x-input.label>Local Government Area</x-input.label>
                            <x-input wire:model="lga" placeholder="LGA" />
                            <x-input.error key="lga" />
                        </div>
            
                        <div>
                            <x-input.label>Gender</x-input.label>
                            <x-input.select wire:model="gender" placeholder="Gender" >
        
                            </x-input.select>
                            <x-input.error key="gender" />
                        </div>
        
                        
                        <div>
                            <x-input.label>Date of Birth</x-input.label>
                            <x-input type="date" wire:model="date_of_birth" placeholder="Date of Birth" />
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
            
                        <div>
                            <x-input.label>State of Origin</x-input.label>
                            <x-input wire:model="state" placeholder="State" />
                            <x-input.error key="state" />
                        </div>
            
                        <div>
                            <x-input.label>Local Government Area</x-input.label>
                            <x-input wire:model="lga" placeholder="LGA" />
                            <x-input.error key="lga" />
                        </div>
            
                        <div class="col-md-12">
                            <x-input.label>Permanent Address</x-input.label>
                            <x-input wire:model="lastname" placeholder="Last Name" />
                            <x-input.error key="lastname" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
