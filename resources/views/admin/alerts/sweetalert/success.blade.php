@if (session('swal-success'))
     <script>
        $(document).ready(function(){ 
            Swal.fire({
            position: "top-end",
            icon: "success",
            title: '{{session('swal-success')}}',
            showConfirmButton: false,
            timer: 1500
        });
    });
    </script>
@endif
