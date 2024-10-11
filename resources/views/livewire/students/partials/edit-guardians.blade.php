<div 
    x-data="{
        repeater: null
    }"

    wire:ignore

    x-init="
        repeater = $('#guardians').repeater({
            initEmpty: true,
            repeaters: [{
                selector: '.inner-repeater',
            }],
            show: function () {
                $(this).slideDown();
            },
            hide: function (deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });

        repeater.setList({!! json_encode($value ?? []) !!})
        
        repeater.on('change', () => {
            $wire.set('{{$name}}', repeater.repeaterVal().guardians);
        });

    "
    
    id="guardians" 
>
    <div class="form-group">
        <div data-repeater-list="guardians" class="gap-3 d-flex flex-column">
            <div data-repeater-item>
                <div  class="gap-2 form-group d-flex align-items-start">
                    <div class="w-md-75 flex-md-fill">
                        <div class="row g-5">
                            <div class="col-md-6">
                                <x-input.select name="relationship" placeholder="Select Relationship" >
                                    <option value=""></option>
                                    <option >Father</option>
                                    <option >Mother</option>
                                    <option >Brother</option>
                                    <option >Sister</option>
                                    <option >Uncle</option>
                                    <option >Aunty</option>
                                    <option >Other</option>
                                </x-input.select>
                            </div>

                            <div class="col-md-6"></div>

                            <div class="col-md-12">
                                <x-input name="name" type="text" required placeholder="Name" />
                            </div>

                            <div class="col-md-4">
                                <x-input name="email" type="text" required placeholder="Email Address" />
                            </div>

                            <div class="col-md-4">
                                <x-input name="phone" type="text" required placeholder="Phone Number" />
                            </div>
                            
                            <div class="col-md-4">
                                <x-input name="occupation" type="text" required placeholder="Occupation" />
                            </div>
                            
                            <div class="col-md-12">
                                <x-input name="address" type="text" required placeholder="Address" />
                            </div>
                        </div>
                    </div>

                    <div>
                        <button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
                            <i class="ki-outline ki-cross fs-1"></i>
                        </button>
                    </div>
                </div>

                <div class="my-5 separator separator-dashed"></div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <button type="button" data-repeater-create="" class="btn w-100 btn-light-primary">
        <i class="ki-outline ki-plus fs-2"></i>Add Guardian</button>
    </div>
</div>

@push('scripts')
    <script src="{{asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js')}}"></script>
@endpush
