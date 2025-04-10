

<?php $__env->startSection('title'); ?>
    <title>سئو سایت</title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
   
    <section class="p-3 rounded-3 bg-white-20">

        <h5 class="text-white">سئو سایت</h5>

        <div
            class="d-flex flex-column align-items-center gap-3 justify-content-center mt-4 justify-content-sm-between flex-sm-row border-bottom p-2 rounded-3 border-primary">
            <div>
                <a href="" class="btn btn-success btn-sm p-2 disabled">ایجاد تنظیم سئو</a>
            </div>
            <div>

                <form action="" method="post">
                    <input type="text" placeholder="جستجو ..." class="form-control w-16-rem p-2">
                </form>
            </div>

        </div>
        <section class="table-responsive mt-5">
            <table class="admin-table table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">عنوان</th>
                        <th scope="col" class="text-center">توضیحات</th>
                        <th scope="col" class="text-center">کلمات کلیدی</th>
                        <th scope="col" class="text-center">نام سایت</th>
                        <th scope="col" class="text-center">لینک سایت</th>
                        <th scope="col" class="text-center">عنوان تویتتر</th>
                        <th scope="col" class="text-center">درباره تویتتر</th>
                        <th scope="col" class="w-16-rem text-center"><i class="fa fa-cogs ms-2"></i>تنظیمات</th>
                    </tr>
                </thead>
                <tbody>
      
                    <tr>
                        <th scope="row" class="text-center"><?php echo e($seo->id); ?></th>
                        <td class="text-center"><?php echo e($seo->title); ?></td>
                        <td class="text-center"><?php echo e(Str::limit($seo->description , 25)); ?></td>
                        <td class="text-center"><?php echo e($seo->keywords); ?></td>
                        <td class="text-center"><?php echo e($seo->site_name); ?></td>
                        <td class="text-center"><?php echo e($seo->site_url); ?></td>
                        <td class="text-center"><?php echo e($seo->twitter_title); ?></td>
                        <td class="text-center"><?php echo e(Str::limit($seo->twitter_description , 25)); ?></td>
                    
                 
                        <td class="d-flex gap-2 text-start justify-content-end w-16-rem align-items-center">
                            <div class="mb-2">
                                <a href="<?php echo e(route('seo.edit' , $seo->id)); ?>" class="btn btn-warning text-white p-2">
                                    <i class="fa fa-edit ms-2"></i>
                                    ویرایش
                                </a>
                            </div>
                        </td>
                    </tr>
                  

                </tbody>
            </table>
        </section>

    </section>
        
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">

    function changeStatus(id) {
            let element = $('#' + id);
            let url = element.attr('data-url');
            let elementValue = !element.prop('checked');

            $.ajax({
                url,
                type: 'GET',
                success: function(response) {
                    if (response.status) {
                        if (response.checked) {
                            element.prop('checked', true);
                            successMessage('کابر با موفقیت فعال شد')
                        } else {
                            element.prop('checked', false);
                            successMessage('کابر با موفقیت غیرفعال شد')
                        }
                    } else {
                        element.prop('checked', elementValue);
                        errorMessage('هنگام ویرایش مشکلی پیش آمده است')
                    }
                },
                error : function(response){
                        console.log(response)
                    element.prop('checked', elementValue);
                            errorMessage('ارتباط برقرار نشد')
                }
            })

        }
        function successMessage(message) {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: message,
                showConfirmButton: false,
                timer: 1500
            });
        }

        function errorMessage(message) {
            Swal.fire({
                position: "top-end",
                icon: "error",
                title: message,
                showConfirmButton: false,
                timer: 1500
            });
        }
    </script>


<?php echo $__env->make('admin.alerts.sweetalert.delete-confirm' , ['className' => 'delete'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-project\compony\compony\resources\views/admin/seo/index.blade.php ENDPATH**/ ?>