

<?php $__env->startSection('title'); ?>
    <title>ادمین ها</title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
   
    <section class="p-3 rounded-3 bg-white-20">

        <h5 class="text-white">ادمین ها</h5>

        <div
            class="d-flex flex-column align-items-center gap-3 justify-content-center mt-4 justify-content-sm-between flex-sm-row border-bottom p-2 rounded-3 border-primary">
            <div>
                <a href="<?php echo e(route('users.create')); ?>" class="btn btn-success btn-sm p-2">ایجاد ادمین جدید</a>
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
                        <th scope="col" class="text-center">نام</th>
                        <th scope="col" class="text-center">نام خانوادگی</th>
                        <th scope="col" class="text-center">ایمیل</th>
                        <th scope="col" class="text-center">شماره موبایل</th>
                        <th scope="col" class="text-center">نقش</th>
                        <th scope="col" class="text-center">وضعیت</th>
                        <th scope="col" class="w-16-rem text-center"><i class="fa fa-cogs ms-2"></i>تنظیمات</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row" class="text-center"><?php echo e($key + 1); ?></th>
                        <td class="text-center"><?php echo e($user->first_name); ?></td>
                        <td class="text-center"><?php echo e($user->last_name); ?></td>
                        <td class="text-center"><?php echo e($user->email); ?></td>
                        <td class="text-center"><?php echo e($user->mobile); ?></td>
                        <td class="text-center"><?php echo e($user->userType()); ?></td>
                    
                 
                      <td class="text-center">
                        <div class="form-check form-switch d-flex justify-content-center align-items-center">
                            <input class="form-check-input" type="checkbox" role="switch"
                                data-url="<?php echo e(route('users.status' , $user->id)); ?>"
                                id="<?php echo e($user->id); ?>" onchange="changeStatus(<?php echo e($user->id); ?>)"
                                <?php if($user->status === 1): ?> checked <?php endif; ?>>
                        </div>
                    </td>
                        <td class="d-flex gap-2 text-start justify-content-end w-16-rem align-items-center">
                            <div class="mb-2">
                                <a href="<?php echo e(route('users.edit' , $user->id)); ?>" class="btn btn-warning text-white p-2">
                                    <i class="fa fa-edit ms-2"></i>
                                    ویرایش
                                </a>
                            </div>
                            
                            
                     
                            <form action="<?php echo e(route('users.destroy' , $user->id)); ?>" class="mb-2" method="POST">
                                <?php echo method_field('DELETE'); ?>
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-danger delete p-2" type="submit"  ><i class="fa fa-trash ms-2"></i>حذف</button>
                            </form>
                            
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
        </section>

    </section>
        <?php echo e($users->links()); ?>

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
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-project\compony\compony\resources\views/admin/users/index.blade.php ENDPATH**/ ?>