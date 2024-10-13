<x-dashboard-layout title="Manage Academic Years" heading="Manage Academic Years" >
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div>
                    <x-input.group wire:model.live.debounce.300ms="keyword" class="w-200px" placeholder="Search Academic Years">
                        <x-slot:left>
                            <i class="ki-outline ki-magnifier fs-1"></i>
                        </x-slot:left>
                    </x-input.group>    
                </div>
                <div class="card-title">
                    <x-button class="btn-primary" data-bs-toggle="modal" data-bs-target="#edit-academic-years" >Add Academic Year</x-button>
                </div>
            </div>

            <div>
                <x-table >
                    <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                        <tr>
                            <th>Title</th>
                            <th>Year</th>
                            <th>Starts At</th>
                            <th>Ends At</th>
                            <th>Is Current</th>
                            <th></th>
                        </tr>
                    </thead>
    
                    <tbody class="text-gray-600 fs-6 fw-semibold">
                        @forelse ($academicYears as $academicYear)
                            <tr>
                                <td>
                                    <a href="#">{{$academicYear->title}}</a>
                                </td>
                                <td>{{$academicYear->year}}</td>
                                <td>{{$academicYear->starts_at}}</td>
                                <td>{{$academicYear->ends_at}}</td>
                                <td>{{$academicYear->is_current ? 'Yes' : 'No'}}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-icon btn-light w-30px h-30px">
                                        <i class="text-muted ki-outline ki-eye fs-2"></i>
                                    </a>
                                    <a href="#" data-bs-target="#edit-academic-years-{{$academicYear->id}}" data-bs-toggle="modal" class="btn btn-sm btn-icon btn-light w-30px h-30px">
                                        <i class="text-muted ki-outline ki-pencil fs-3"></i>
                                    </a> 
                                    <x-swal href="{{route('academic-years.destroy', ['academicYear' => $academicYear->id])}}" class="btn btn-sm btn-icon btn-light-danger w-30px h-30px">
                                        <i class="ki-outline ki-trash fs-2"></i>
                                    </x-swal>
                                </td>

                                <livewire:academic-years.edit modal="edit-academic-years-{{$academicYear->id}}" :academicYear="$academicYear" />
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </x-table>

                {{$academicYears->links()}}
            </div>

            <livewire:academic-years.edit modal="edit-academic-years" />
        </div>
    </div>
</x-dashboard-layout>