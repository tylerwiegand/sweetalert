@if (Session::has('sweetalert.json'))
    <script>
        swal({!! Session::pull('sweetalert.json') !!});
    </script>
    @php
        Session::forget('sweetalert.json');
    @endphp
@endif