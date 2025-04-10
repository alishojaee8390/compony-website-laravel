

<?php $__env->startSection('title'); ?>
    <title>بخش فوتر - ویرایش  تماس باما</title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">بخش فوتر - ویرایش  تماس باما</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="<?php echo e(route('footer-contact.index')); ?>" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="<?php echo e(route('footer-contact.update', $footerContact->id)); ?>" method="post">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <div class="row mt-3">
          
                        <div class="col-12 col-lg-6 mt-3 p-2">
                            <label for="address" class="form-label">آدرس شرکت :</label>
                            <input type="text" class="form-control p-1 mb-2" id="address" name="address"
                                placeholder="آدرس شرکت را وارد کنید" value="<?php echo e(old('address' , $footerContact->address)); ?>">
                            <?php $__errorArgs = ['address'];
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
                            <label for="phone" class="form-label">شماره تلفن :</label>
                            <input type="text" class="form-control p-1 mb-2" id="phone" name="phone"
                            placeholder="شماره تلفن را وارد کنید" value="<?php echo e(old('phone' , $footerContact->phone)); ?>">
                            <?php $__errorArgs = ['phone'];
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
                            <label for="email" class="form-label">ایمیل :</label>
                            <input type="text" class="form-control p-1 mb-2" id="email" name="email"
                            placeholder="ایمیل را وارد کنید" value="<?php echo e(old('email' , $footerContact->email)); ?>">
                            <?php $__errorArgs = ['email'];
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


<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-project\compony\compony\resources\views/admin/footer/contact/edit.blade.php ENDPATH**/ ?>