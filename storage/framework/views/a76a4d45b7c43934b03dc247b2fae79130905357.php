<?php if(session('swal-success')): ?>
     <script>
        $(document).ready(function(){ 
            Swal.fire({
            position: "top-end",
            icon: "success",
            title: '<?php echo e(session('swal-success')); ?>',
            showConfirmButton: false,
            timer: 1500
        });
    });
    </script>
<?php endif; ?>
<?php /**PATH D:\laravel-project\compony\compony\resources\views/admin/alerts/sweetalert/success.blade.php ENDPATH**/ ?>