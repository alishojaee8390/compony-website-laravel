

<?php $__env->startSection('title'); ?>
    <title>بخش نظرات مشتریان</title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
    <section class="p-3 rounded-3 bg-white-20">

        <h5 class="text-white">بخش نظرات مشتریان</h5>

        <div
            class="d-flex flex-column align-items-center gap-3 justify-content-center mt-4 justify-content-sm-between flex-sm-row border-bottom p-2 rounded-3 border-primary">
            <div>
                <a href="<?php echo e(route('testimonial.create')); ?>" class="btn btn-success btn-sm p-2">ایجاد نظر</a>
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
                        <th scope="col" class="text-center">نام مشتری</th>
                        <th scope="col" class="text-center">شغل</th>
                        <th scope="col" class="text-center">نظر</th>
                        <th scope="col" class="text-center">تصویر</th>
                        <th scope="col" class="text-center">آلت تصویر</th>
                        <th scope="col" class="w-16-rem text-center"><i class="fa fa-cogs ms-2"></i>تنظیمات</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row" class="text-center"><?php echo e($key + 1); ?></th>
                            <td class="text-center"><?php echo e($testimonial->fullName); ?></td>
                            <td class="text-center"><?php echo e($testimonial->job); ?></td>
                            <td class="text-center"><?php echo e($testimonial->description); ?></td>
                            <td class="text-center img-fluid"><img src="<?php echo e(asset('images/testimonial/'.$testimonial->image)); ?>" style="width: 45px; height: 45px;" alt="<?php echo e($testimonial->alt); ?>"></td>
                            <td class="text-center"><?php echo e($testimonial->alt); ?></td>
                            <td class="d-flex gap-2 text-start justify-content-end w-16-rem align-items-center">
                                <div class="mb-2">
                                    <a href="<?php echo e(route('testimonial.edit', $testimonial->id)); ?>"
                                        class="btn btn-warning text-white p-2">
                                        <i class="fa fa-edit ms-2"></i>
                                        ویرایش
                                    </a>
                                </div>
                                <form action="<?php echo e(route('testimonial.destroy', $testimonial->id)); ?>" class="mb-2" method="POST">
                                    <?php echo method_field('DELETE'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button class="btn btn-danger delete p-2" type="submit"><i
                                            class="fa fa-trash ms-2"></i>حذف</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </section>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('admin.alerts.sweetalert.delete-confirm', ['className' => 'delete'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-project\compony\compony\resources\views/admin/testimonial/index.blade.php ENDPATH**/ ?>