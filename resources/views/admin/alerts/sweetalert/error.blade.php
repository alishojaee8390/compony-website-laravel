@if (session('swal-error'))
    <script>
        $(document).ready(function(){
            Swal.fire({
            position: "top-end",
            icon: "error",
            title: {{session('swal-error')}},
            showConfirmButton: false,
            timer: 1500
        });
        });
    </script>
@endif
