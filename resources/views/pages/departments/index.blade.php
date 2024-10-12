<x-dashboard-layout title="Manage Departments" heading="Manage Departments" >
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div>
                    <x-input.group wire:model.live.debounce.300ms="keyword" class="w-200px" placeholder="Search Departments">
                        <x-slot:left>
                            <i class="ki-outline ki-magnifier fs-1"></i>
                        </x-slot:left>
                    </x-input.group>    
                </div>
                <div class="card-title">
                    <x-button class="btn-primary" data-bs-toggle="modal" data-bs-target="#edit-department" >Add Department</x-button>
                </div>
            </div>

            <div>
                <x-table >
                    <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                        <tr>
                            <th>Name</th>
                            <th>Total Subjects</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
    
                    <tbody class="text-gray-600 fs-6 fw-semibold">
                        @forelse ($departments as $department)
                            <tr>
                                <td>
                                    <a href="#">{{$department->name}}</a>
                                </td>
                                <td>{{$department->subjects_count}}</td>
                                <td>{{$department->status->label()}}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-icon btn-light w-30px h-30px">
                                        <i class="text-muted ki-outline ki-eye fs-2"></i>
                                    </a>
                                    <a href="#" data-bs-target="#edit-department-{{$department->id}}" data-bs-toggle="modal" class="btn btn-sm btn-icon btn-light w-30px h-30px">
                                        <i class="text-muted ki-outline ki-pencil fs-3"></i>
                                    </a>
                                    <x-swal href="{{route('departments.destroy', ['department' => $department->id])}}" class="btn btn-sm btn-icon btn-light-danger w-30px h-30px">
                                        <i class="ki-outline ki-trash fs-2"></i>
                                    </x-swal>
                                </td>

                                <livewire:departments.edit modal="edit-department-{{$department->id}}" :department="$department" />
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </x-table>

                {{$departments->links()}}
            </div>

            <livewire:departments.edit modal="edit-department" />
        </div>
    </div>
</x-dashboard-layout>