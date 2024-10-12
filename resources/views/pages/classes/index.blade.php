<x-dashboard-layout title="Manage Classes" heading="Manage Classes" >
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div>
                    <x-input.group wire:model.live.debounce.300ms="keyword" class="w-200px" placeholder="Search Classes">
                        <x-slot:left>
                            <i class="ki-outline ki-magnifier fs-1"></i>
                        </x-slot:left>
                    </x-input.group>    
                </div>
                <div class="card-title">
                    <x-button class="btn-primary" data-bs-toggle="modal" data-bs-target="#edit-class" >Add Class</x-button>
                </div>
            </div>

            <div>
                <x-table >
                    <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                        <tr>
                            <th>Name</th>
                            <th>Class Type</th>
                            <th>Grade Level</th>
                            <th>Total Students</th>
                            <th></th>
                        </tr>
                    </thead>
    
                    <tbody class="text-gray-600 fs-6 fw-semibold">
                        @forelse ($classes as $class)
                            <tr>
                                <td>
                                    <a href="#">{{$class->name}}</a>
                                </td>
                                <td>{{$class->type->label()}}</td>
                                <td>{{$class->level}}</td>
                                <td>{{$class->students_count}}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-icon btn-light w-30px h-30px">
                                        <i class="text-muted ki-outline ki-eye fs-2"></i>
                                    </a>
                                    <a href="#" data-bs-target="#edit-class-{{$class->id}}" data-bs-toggle="modal" class="btn btn-sm btn-icon btn-light w-30px h-30px">
                                        <i class="text-muted ki-outline ki-pencil fs-3"></i>
                                    </a>
                                    <x-swal href="{{route('classes.destroy', ['class' => $class->id])}}" class="btn btn-sm btn-icon btn-light-danger w-30px h-30px">
                                        <i class="ki-outline ki-trash fs-2"></i>
                                    </x-swal>
                                </td>

                                <livewire:classes.edit modal="edit-class-{{$class->id}}" :class="$class" />
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </x-table>

                {{$classes->links()}}
            </div>

            <livewire:classes.edit modal="edit-class" />
        </div>
    </div>
</x-dashboard-layout>