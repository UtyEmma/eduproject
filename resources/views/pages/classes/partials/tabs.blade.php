<ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
    <li class="nav-item">
        <a class="nav-link {{request()->routeIs('classes.show') ? 'active' : ''}}" href="{{route('classes.show', ['class' => $class->id])}}">Overview</a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link {{request()->routeIs('classes.subjects') ? 'active' : ''}}" href="{{route('classes.subjects', ['class' => $class->id])}}">Subjects</a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link {{request()->routeIs('classes.students') ? 'active' : ''}}" href="{{route('classes.students', ['class' => $class->id])}}">Students</a>
    </li>
</ul>
