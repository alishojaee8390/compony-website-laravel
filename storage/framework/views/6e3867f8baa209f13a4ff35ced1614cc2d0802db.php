<?php $__env->startSection('head-tag'); ?>
    <title>ورود به پنل ادمین</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="auth my-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="title-login text-center mb-5 bg-primary p-3 rounded-3 text-white">
                        ورود به پنل ادمین
                    </div>
                    <div class="form shadow-sm mt-3 bg-white p-5 rounded-3">
                        <form action="<?php echo e(route('login.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="input-group">
                                <label for="">ایمیل یا موبایل:</label>
                                <input type="text" class="form-control py-2  w-100 mt-3"
                                    placeholder="ایمیل یا شماره موبایل خود را وارد کنید" name="email">

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger "><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="input-group mt-3">
                                <label for="">رمز عبور:</label>
                                <input type="password" class="form-control py-2  w-100 mt-3"
                                    placeholder="رمز عبور خود را وارد کنید" name="password">
                                
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="input-group mt-3">
                                <input type="checkbox" name="remember" id="remember">   
                                <label for="remember">من را  بخاطر بسپار</label>
                            </div>
                            <div class="text-center m-auto mt-3">

                                <button class="btn btn-primary w-50" type="submit">ورود</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\laravel-project\compony\compony\resources\views/auth/login.blade.php ENDPATH**/ ?>