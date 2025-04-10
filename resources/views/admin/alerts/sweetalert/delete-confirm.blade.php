<script>

    $(document).ready(function() {
        var className = '{{ $className }}';
        let element = $('.' + className);
        element.on('click', function(e) {
            e.preventDefault();

            Swal.fire({
                title: "آیا از حذف داده مطعمن هستید ؟",
                // text: "",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "بله , حذف کن",
                cancelButtonText: "خیر",
                reverseButtons: true

            }).then((result) => {
                if (result.value == true) {
                    $(this).parent().submit();
                    Swal.fire({
                        title: "پاک شد!",
                        text: "داده با موفقیت حذف شد",
                        icon: "success"
                    });
            }
        })
    })
})

</script>
