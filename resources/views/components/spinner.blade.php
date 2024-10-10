@props([
    'message' => 'Loading...'
])
<span class="spinner-border spinner-border-sm text-{{$color ?? 'white'}} {{$class ?? ''}}"  role="status" {{ $attributes->except('class') }}>
    <span class="visually-hidden">{{$message}}</span>
</span>
