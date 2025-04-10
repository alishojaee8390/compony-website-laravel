<?php if(session('swal-error')): ?>
    <script>
        $(document).ready(function(){
            Swal.fire({
            position: "top-end",
            icon: "error",
            title: <?php echo e(session('swal-error')); ?>,
            showConfirmButton: false,
            timer: 1500
        });
        });
    </script>
<?php endif; ?>
<?php /**PATH D:\laravel-project\compony\compony\resources\views/admin/alerts/sweetalert/error.blade.php ENDPATH**/ ?>