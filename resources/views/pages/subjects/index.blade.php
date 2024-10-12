<x-dashboard-layout title="Manage Subjects" heading="Manage Subjects" >
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div>
                    <x-input.group wire:model.live.debounce.300ms="keyword" class="w-200px" placeholder="Search Subjects">
                        <x-slot:left>
                            <i class="ki-outline ki-magnifier fs-1"></i>
                        </x-slot:left>
                    </x-input.group>    
                </div>
                <div class="card-title">
                    <x-button class="btn-primary" data-bs-toggle="modal" data-bs-target="#edit-subject" >Add Subject</x-button>
                </div>
            </div>

            <div>
                <x-table >
                    <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                        <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Is Optional</th>
                            <th></th>
                        </tr>
                    </thead>
    
                    <tbody class="text-gray-600 fs-6 fw-semibold">
                        @forelse ($subjects as $subject)
                            <tr>
                                <td>
                                    <a href="#">{{$subject->name}}</a>
                                </td>
                                <td>{{$subject->department->name}}</td>
                                <td>
                                    <x-input.switch :checked="$subject->is_optional" ></x-input.switch>
                                </td>

                                <td>
                                    <a href="#" class="btn btn-sm btn-icon btn-light w-30px h-30px">
                                        <i class="text-muted ki-outline ki-eye fs-2"></i>
                                    </a>
                                    <a href="#" data-bs-target="#edit-subject-{{$subject->id}}" data-bs-toggle="modal" class="btn btn-sm btn-icon btn-light w-30px h-30px">
                                        <i class="text-muted ki-outline ki-pencil fs-3"></i>
                                    </a>
                                    <x-swal href="{{route('subjects.destroy', ['subject' => $subject->id])}}" class="btn btn-sm btn-icon btn-light-danger w-30px h-30px">
                                        <i class="ki-outline ki-trash fs-2"></i>
                                    </x-swal>
                                </td>

                                <livewire:subjects.edit modal="edit-subject-{{$subject->id}}" :subject="$subject" />
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </x-table>

                {{$subjects->links()}}
            </div>

            <livewire:subjects.edit modal="edit-subject" />
        </div>
    </div>
</x-dashboard-layout>