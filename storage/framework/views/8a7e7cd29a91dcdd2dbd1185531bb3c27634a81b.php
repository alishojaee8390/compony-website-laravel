

<?php $__env->startSection('title'); ?>
    <title>ایجاد بخش تیم</title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">ایجاد بخش تیم</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="<?php echo e(route('team.index')); ?>" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="<?php echo e(route('team.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row mt-3">

                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="fullName" class="form-label">نام و نام خانوادگی :</label>
                        <input type="text" class="form-control p-1 mb-2" id="fullName" name="fullName"
                            placeholder="نام و نام خانوادگی را وارد کنید" value="<?php echo e(old('fullName')); ?>">
                        <?php $__errorArgs = ['fullName'];
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
                        <label for="job" class="form-label">رتبه سازمانی :</label>
                        <input type="text" class="form-control p-1 mb-2" id="job" name="job"
                            placeholder="رتبه سازمانی را وارد کنید" value="<?php echo e(old('job')); ?>">
                        <?php $__errorArgs = ['job'];
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
                        <label for="alt" class="form-label">آلت تصویر :</label>
                        <input type="text" class="form-control p-1 mb-2" id="alt" name="alt"
                            placeholder="آلت تصویر را وارد کنید" value="<?php echo e(old('alt')); ?>">
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
                        <label for="image" class="form-label">تصویر :</label>
                        <input type="file" class="form-control p-1 mb-2" id="image" name="image"
                           value="<?php echo e(old('image')); ?>">
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
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="url_instagram" class="form-label"> لینک اینستاگرام :</label>
                        <input type="text" class="form-control p-1 mb-2" id="url_instagram" name="url_instagram"
                            placeholder="لینک اینستاگرام را وارد کنید" value="<?php echo e(old('url_instagram')); ?>">
                        <?php $__errorArgs = ['url_instagram'];
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
                        <label for="url_facebook" class="form-label"> لینک فیسبوک :</label>
                        <input type="text" class="form-control p-1 mb-2" id="url_facebook" name="url_facebook"
                            placeholder="لینک فیسبوک را وارد کنید" value="<?php echo e(old('url_facebook')); ?>">
                        <?php $__errorArgs = ['url_facebook'];
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
                        <label for="url_tiwtter" class="form-label">لینک توییتر :</label>
                        <input type="text" class="form-control p-1 mb-2" id="url_tiwtter" name="url_twitter"
                            placeholder="لینک توییتر را وارد کنید" value="<?php echo e(old('url_tiwtter')); ?>">
                        <?php $__errorArgs = ['url_tiwtter'];
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
                        <label for="url_linkden" class="form-label">لینک لینکدین :</label>
                        <input type="text" class="form-control p-1 mb-2" id="url_linkden" name="url_linkden"
                            placeholder="لینک لینکدین را وارد کنید" value="<?php echo e(old('url_linkden')); ?>">
                        <?php $__errorArgs = ['url_linkden'];
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

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-project\compony\compony\resources\views/admin/team/create.blade.php ENDPATH**/ ?>