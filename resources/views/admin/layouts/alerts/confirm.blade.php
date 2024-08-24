<script src="{{ asset('public/admin/dist/js/swal.js') }}"></script>

@if (session()->has('confirm'))
    <script>
        swal({
            title: " {{ session()->get('confirm') }}",
            // text: "You clicked the button!",
            icon: "error",
            button: "ok!",
        });
    </script>
@endif



{{-- " {{ session()->get('confirm') }}" --}}
