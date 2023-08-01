@if (session()->has('message'))
    <script>
        Swal.fire(
            'Done',
            '{{ session('message') }}',
            'success'
        )
    </script>
@endif


@if (session()->has('message1'))
    <script>
        swal.fire ( 
            'Oops',  
            '{{session('message1')}}',  
            'error' 
            )
    </script>
@endif