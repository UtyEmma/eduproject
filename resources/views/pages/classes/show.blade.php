<x-dashboard-layout title="{{$class->name}}" heading="{{$class->name}}" >
    @include('pages.classes.partials.tabs')

    <div class="row row-cols-4 g-5 mb-5">
        <div>
            <a href="{{route('zones')}}" class="card card-flush" >
                <div class="card-body d-flex  flex-column">
                    <span class="fs-2hx fw-bold me-2 lh-1 ls-n2">{{$class->subjects_count}}</span>
                    <span class="pt-1 fw-semibold fs-6">Subjects</span>
                </div>
            </a>
        </div>
        <div>
            <div class="card card-flush">
                <div class="card-body d-flex  flex-column">
                    <span class="fs-2hx fw-bold me-2 lh-1 ls-n2">{{$class->students_count}}</span>
                    <span class="pt-1 fw-semibold fs-6">Students</span>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

        </div>
    </div>
</x-dashboard-layout>