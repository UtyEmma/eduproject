<x-app-layout title="{{$title}}" >
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <div class="w-lg-500px p-10 card">
                        <div class="mb-5 d-flex justify-content-center">
                            <a href="{{route('dashboard')}}" class="">
                                <img alt="Logo" src="/assets/media/logos/logo.jpg" class="h-50px rounded logo" />
                            </a>
                        </div>

                        {{$slot}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>