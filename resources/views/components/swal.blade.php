@props([
    'status' => 'warning',
    'title' => 'Are you sure',
    'message' => '',
])

<a {{$attributes->except(['title', 'message', 'status'])}}
    x-data="{}"
    x-on:click.prevent="
        Swal.fire({
            title:  '{{$title}}',
            text: `{{$message}}`,
            icon: '{{$status}}',
            showCancelButton: true,
            confirmButtonText: 'Proceed',
            confirmButtonColor: '#f1416c',
        }).then((result) => {
            if(result.isConfirmed){
                window.location.href = $el.getAttribute('href')
            }
        })
    ">{{$slot}}</a>
