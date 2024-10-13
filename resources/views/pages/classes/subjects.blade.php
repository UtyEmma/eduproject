<x-dashboard-layout title="{{$class->name}}" heading="{{$class->name}}" >
    @include('pages.classes.partials.tabs')

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
                    <x-button class="btn-primary" data-bs-toggle="modal" data-bs-target="#edit-class-subject" >Add Subject</x-button>
                </div>
            </div>

            <div>
                <x-table >
                    <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                        <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Is Elective</th>
                        </tr>
                    </thead>
    
                    <tbody class="text-gray-600 fs-6 fw-semibold">
                        @forelse ($class->subjects as $subject)
                            <tr>
                                <td>
                                    <a href="#">{{$subject->subject->name}}</a>
                                </td>
                                <td>{{$subject->subject->department->name}}</td>
                                <td><x-input.switch :checked="$subject->is_elective" ></x-input.switch></td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </x-table>
            </div>

            <livewire:classes.subject.edit :class="$class" modal="edit-class-subject" />
        </div>
    </div>

</x-dashboard-layout>