

<?php $__env->startSection('title'); ?>
    <title>ویرایش بخش خدمات</title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">ویرایش بخش خدمات</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="<?php echo e(route('service.index')); ?>" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="<?php echo e(route('service.update', $service->id)); ?>" method="post" enctype="multipart/form-data">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <div class="row mt-3">
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="image" class="form-label">تصویر :</label>
                        <input type="file" class="form-control p-1 mb-2" id="image" name="image"
                           value="<?php echo e(old('image', $service->image)); ?>">
                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger mt-3"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-12 col-md-6 col-md-6 mt-3 p-2">
                        <label for="alt" class="form-label">آلت تصویر :</label>
                        <input type="text" class="form-control p-1 mb-2" id="alt" name="alt"
                            placeholder="آلت تصویر را وارد کنید" value="<?php echo e(old('alt', $service->alt)); ?>">
                        <?php $__errorArgs = ['alt'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger mt-3"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="service_title_1" class="form-label">عنوان خدمت 1 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="service_title_1" name="service_title_1"
                        placeholder="عنوان خدمت 1 را وارد کنید" value="<?php echo e(old('service_title_1', $service->service_title_1)); ?>">
                        <?php $__errorArgs = ['service_title_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger mt-3"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="service_desc_1" class="form-label">توضیحات خدمت 1 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="service_desc_1" name="service_desc_1"
                        placeholder="توضیحات خدمت 1 را وارد کنید" value="<?php echo e(old('service_desc_1', $service->service_desc_1)); ?>">
                        <?php $__errorArgs = ['service_desc_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger mt-3"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="service_title_2" class="form-label">عنوان خدمت 2 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="service_title_2" name="service_title_2"
                        placeholder="عنوان خدمت 2 را وارد کنید" value="<?php echo e(old('service_title_2', $service->service_title_2)); ?>">
                        <?php $__errorArgs = ['service_title_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger mt-3"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="service_desc_2" class="form-label">توضیحات خدمت 2 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="service_desc_2" name="service_desc_2"
                        placeholder="توضیحات خدمت 2 را وارد کنید" value="<?php echo e(old('service_desc_2', $service->service_desc_2)); ?>">
                        <?php $__errorArgs = ['service_desc_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger mt-3"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="service_title_3" class="form-label">عنوان خدمت 3 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="service_title_3" name="service_title_3"
                        placeholder="عنوان خدمت 3 را وارد کنید" value="<?php echo e(old('service_title_3', $service->service_title_3)); ?>">
                        <?php $__errorArgs = ['service_title_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger mt-3"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="service_desc_3" class="form-label">توضیحات خدمت 3 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="service_desc_3" name="service_desc_3"
                        placeholder="توضیحات خدمت 3 را وارد کنید" value="<?php echo e(old('service_desc_3', $service->service_desc_3)); ?>">
                        <?php $__errorArgs = ['service_desc_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger mt-3"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                   
                </div>

                <button type="submit" class="btn btn-success mt-3 p-2 px-5">ثبت</button>

            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-project\compony\compony\resources\views/admin/service/edit.blade.php ENDPATH**/ ?>