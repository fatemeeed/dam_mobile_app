<script src="{{ asset('admin-assets/js/jquery-3.5.1.min.js') }}"></script>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="{{ asset('admin-assets/js/all.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/main.js') }}"></script>
<script src="{{ asset('admin-assets/js/grid.js') }}"></script>
{{-- <script src="{{ asset('admin-assets/js/popper.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="{{ asset('admin-assets/sweetalert/sweetalert2.min.js') }}"></script>
<script src="{{ asset('admin-assets/dataTable/jquery.dataTables.min.js') }}"></script>

<script>
    $(document).ready(function() {
        new DataTable('#datatable');
    });
</script>
