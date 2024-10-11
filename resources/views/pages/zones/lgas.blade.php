<x-dashboard-layout title="{{$zone->name}}" heading="{{$zone->name}}" >
    @include('pages.zones.partials.tabs')

    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div>
                    <x-input.group wire:model.live.debounce.300ms="keyword" class="w-200px" placeholder="Search Local Governments">
                        <x-slot:left>
                            <i class="ki-outline ki-magnifier fs-1"></i>
                        </x-slot:left>
                    </x-input.group>    
                </div>
                <div class="card-title">
                    <x-button class="btn-primary" data-bs-toggle="modal" data-bs-target="#edit-lgas" >Create LGA</x-button>
                </div>
            </div>

            <div>
                <x-table >
                    <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                        <tr>
                            <th>Name</th>
                            <th>Headquaters</th>
                            <th>Zone</th>
                            <th>Schools</th>
                            <th></th>
                        </tr>
                    </thead>
    
                    <tbody class="text-gray-600 fs-6 fw-semibold">
                        @forelse ($zone->lgas as $lga)
                            <tr>
                                <td>{{$lga->name}}</td>
                                <td>{{$lga->capital}}</td>
                                <td>{{$lga->zone->name}}</td>
                                <td>{{$lga->schools_count}}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-icon btn-light w-30px h-30px">
                                        <i class="text-muted ki-outline ki-eye fs-2"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-icon btn-light w-30px h-30px">
                                        <i class="text-muted ki-outline ki-message-edit fs-2"></i>
                                    </a>
                                    <x-swal href="#" class="btn btn-sm btn-icon btn-light-danger w-30px h-30px">
                                        <i class="ki-outline ki-trash fs-2"></i>
                                    </x-swal>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </x-table>
            </div>

            <livewire:lgas.edit :zone="$zone" />
        </div>
    </div>
</x-dashboard-layout>