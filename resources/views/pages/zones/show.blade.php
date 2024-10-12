<x-dashboard-layout title="{{$zone->name}}" heading="{{$zone->name}}" >
    @include('pages.zones.partials.tabs')

    <div class="row row-cols-4 g-5">
        <div>
            <a href="{{route('zones.lgas', ['zone' => $zone->id])}}" class="card card-flush card-bordered" >
                <div class="card-body d-flex  flex-column">
                    <span class="fs-2hx fw-bold me-2 lh-1 ls-n2">{{$zone->lgas_count}}</span>
                    <span class="pt-1 fw-semibold fs-6">Local Governments</span>
                </div>
            </a>
        </div>
        <div>
            <a href="{{route('zones.schools', ['zone' => $zone->id])}}" class="card card-flush card-bordered" >
                <div class="card-body d-flex  flex-column">
                    <span class="fs-2hx fw-bold me-2 lh-1 ls-n2">{{$zone->schools_count}}</span>
                    <span class="pt-1 fw-semibold fs-6">Schools</span>
                </div>
            </a>
        </div>
        <div>
            <a href="{{route('students')}}" class="card card-flush card-bordered" >
                <div class="card-body d-flex  flex-column">
                    <span class="fs-2hx fw-bold me-2 lh-1 ls-n2">{{$zone->students_count}}</span>
                    <span class="pt-1 fw-semibold fs-6">Students</span>
                </div>
            </a>
        </div>
    </div>
    
</x-dashboard-layout>