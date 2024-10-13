<x-dashboard-layout title="Dashboard" heading="Dashboard" >
    <div class="row row-cols-4 g-5">
        <div>
            <a href="{{route('zones')}}" class="card card-flush" >
                <div class="card-body d-flex  flex-column">
                    <span class="fs-2hx fw-bold me-2 lh-1 ls-n2">{{$zones}}</span>
                    <span class="pt-1 fw-semibold fs-6">Zones</span>
                </div>
            </a>
        </div>
        <div>
            <div class="card card-flush">
                <div class="card-body d-flex  flex-column">
                    <span class="fs-2hx fw-bold me-2 lh-1 ls-n2">{{$lgas}}</span>
                    <span class="pt-1 fw-semibold fs-6">Local Governments</span>
                </div>
            </div>
        </div>
        <div>
            <a href="{{route('schools')}}" class="card card-flush" >
                <div class="card-body d-flex  flex-column">
                    <span class="fs-2hx fw-bold me-2 lh-1 ls-n2">{{$schools}}</span>
                    <span class="pt-1 fw-semibold fs-6">Schools</span>
                </div>
            </a>
        </div>
        <div>
            <a href="{{route('students')}}" class="card card-flush" >
                <div class="card-body d-flex  flex-column">
                    <span class="fs-2hx fw-bold me-2 lh-1 ls-n2">{{$students}}</span>
                    <span class="pt-1 fw-semibold fs-6">Students</span>
                </div>
            </a>
        </div>
        <div>
            <div class="card card-flush" >
                <div class="card-body d-flex  flex-column">
                    <span class="fs-2hx fw-bold me-2 lh-1 ls-n2">{{$guardians}}</span>
                    <span class="pt-1 fw-semibold fs-6">Guardians</span>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
