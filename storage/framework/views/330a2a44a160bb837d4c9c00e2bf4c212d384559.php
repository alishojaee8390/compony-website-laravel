

<?php $__env->startSection('title'); ?>
    <title>بخش فوتر - ویرایش درباره شرکت</title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">بخش فوتر - ویرایش درباره شرکت</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="<?php echo e(route('footer-about.index')); ?>" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="<?php echo e(route('footer-about.update', $footerAbout->id)); ?>" method="post">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <div class="row mt-3">
          
                        <div class="col-12 col-lg-6 mt-3 p-2">
                            <label for="description" class="form-label">درباره شرکت :</label>
                            <input type="text" class="form-control p-1 mb-2" id="description" name="description"
                                placeholder="درباره شرکت را وارد کنید" value="<?php echo e(old('description' , $footerAbout->description)); ?>">
                            <?php $__errorArgs = ['description'];
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
    
                        <div class="col-12 col-lg-6 mt-3 p-2">
                            <label for="url_instagram" class="form-label">لینک اینستاگرام :</label>
                            <input type="text" class="form-control p-1 mb-2" id="url_instagram" name="url_instagram"
                            placeholder="لینک اینستاگرام را وارد کنید" value="<?php echo e(old('url_instagram' , $footerAbout->url_instagram)); ?>">
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
                        <div class="col-12 col-lg-6 mt-3 p-2">
                            <label for="url_twitter" class="form-label">لینک توییتر :</label>
                            <input type="text" class="form-control p-1 mb-2" id="url_twitter" name="url_twitter"
                            placeholder="لینک توییتر را وارد کنید" value="<?php echo e(old('url_twitter' , $footerAbout->url_twitter)); ?>">
                            <?php $__errorArgs = ['url_twitter'];
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
                        <div class="col-12 col-lg-6 mt-3 p-2">
                            <label for="url_facebook" class="form-label">لینک فیسبوک :</label>
                            <input type="text" class="form-control p-1 mb-2" id="url_facebook" name="url_facebook"
                            placeholder="لینک فیسبوک را وارد کنید" value="<?php echo e(old('url_facebook' , $footerAbout->url_facebook)); ?>">
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
    
                </div>
                

                <button type="submit" class="btn btn-success mt-3 p-2 px-5">ثبت</button>

            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-project\compony\compony\resources\views/admin/footer/about/edit.blade.php ENDPATH**/ ?>