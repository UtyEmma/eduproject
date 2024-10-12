<x-dashboard-layout title="Zones">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div>
                    <x-input.group wire:model.live.debounce.300ms="keyword" class="w-200px" placeholder="Search Zones">
                        <x-slot:left>
                            <i class="ki-outline ki-magnifier fs-1"></i>
                        </x-slot:left>
                    </x-input.group>    
                </div>
                <div class="card-title">
                    <x-button class="btn-primary" data-bs-toggle="modal" data-bs-target="#zone-edit" >Create Zone</x-button>
                </div>
            </div>

            <div>
                <x-table >
                    <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                        <tr>
                            <th>Name</th>
                            <th>Local Governments</th>
                            <th>Schools</th>
                            <th></th>
                        </tr>
                    </thead>
    
                    <tbody class="text-gray-600 fs-6 fw-semibold">
                        @forelse ($zones as $zone)
                            <tr>
                                <td>
                                    <a href="{{route('zones.show', ['zone' => $zone->id])}}">{{$zone->name}}</a>
                                </td>
                                <td>{{$zone->lgas_count}}</td>
                                <td>{{$zone->lgas_count}}</td>
                                <td>
                                    <a href="{{route('zones.show', ['zone' => $zone->id])}}" class="btn btn-sm btn-icon btn-light w-30px h-30px">
                                        <i class="text-muted ki-outline ki-eye fs-2"></i>
                                    </a>

                                    <x-button data-bs-target="#zone-edit-{{$zone->id}}" data-bs-toggle="modal" class="btn-sm btn-icon btn-light w-30px h-30px">
                                        <i class="text-muted ki-outline ki-message-edit fs-2"></i>
                                    </x-button>

                                    <x-swal href="{{route('zones.destroy', ['zone' => $zone->id])}}" class="btn btn-sm btn-icon btn-light-danger w-30px h-30px">
                                        <i class="ki-outline ki-trash fs-2"></i>
                                    </x-swal>

                                    <livewire:zones.edit :zone="$zone" modal="zone-edit-{{$zone->id}}" />
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </x-table>

                {{$zones->links()}}
            </div>

            <livewire:zones.edit modal="zone-edit" />
        </div>
    </div>
</x-dashboard-layout>