<x-app-layout >
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            @include('layouts.partials.dashboard.sidebar')

            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                @include('layouts.partials.dashboard.header')

                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="container-fluid" id="kt_content_container">
                        {{$slot}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>