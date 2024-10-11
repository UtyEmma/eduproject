<x-dashboard-layout title="Administrators" heading="Administrators">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div>
                    <x-input.group wire:model.live.debounce.300ms="keyword" class="w-200px" placeholder="Search Schools">
                        <x-slot:left>
                            <i class="ki-outline ki-magnifier fs-1"></i>
                        </x-slot:left>
                    </x-input.group>    
                </div>
                <div class="card-title">
                    <a href="{{route('students.create')}}" class="btn btn-primary" >Add Student</a>
                </div>
            </div>

            <div>
                <x-table >
                    <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                        <tr>
                            <th>Name</th>
                            <th>School</th>
                            <th></th>
                        </tr>
                    </thead>
    
                    <tbody class="text-gray-600 fs-6 fw-semibold">
                        @forelse ($admins as $admin)
                            <tr>
                                <td>
                                    <a href="#">{{$admin->fullname}}</a>
                                </td>
                                <td>{{$admin->school?->name}}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-icon btn-light w-30px h-30px">
                                        <i class="text-muted ki-outline ki-eye fs-2"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-icon btn-light w-30px h-30px">
                                        <i class="text-muted ki-outline ki-pencil fs-3"></i>
                                    </a>
                                    <x-swal href="{{route('admins.destroy', ['user' => $admins->id])}}" class="btn btn-sm btn-icon btn-light-danger w-30px h-30px">
                                        <i class="ki-outline ki-trash fs-2"></i>
                                    </x-swal>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </x-table>

                {{$admins->links()}}
            </div>
        </div>
    </div>
</x-dashboard-layout>