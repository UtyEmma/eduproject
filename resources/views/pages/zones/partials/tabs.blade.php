<ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
    <li class="nav-item">
        <a class="nav-link {{request()->routeIs('zones.show') ? 'active' : ''}}" href="{{route('zones.show', ['zone' => $zone->id])}}">Overview</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{request()->routeIs('zones.lgas') ? 'active' : ''}}" href="{{route('zones.lgas', ['zone' => $zone->id])}}">Local Governments</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{request()->routeIs('zones.schools') ? 'active' : ''}}" href="{{route('zones.schools', ['zone' => $zone->id])}}">Schools</a>
    </li>
</ul>
