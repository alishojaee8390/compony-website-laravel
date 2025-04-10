<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('admin.layouts.head-tag', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('title'); ?>
</head>

<body>
    <?php echo $__env->make('admin.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="main">
        <div class="head">
            <div class="col-lg-6 d-flex align-items-center gap-2">
                <span class="nav fs-4 text-white">
                    <i class="fas fa-bars"></i>
                </span>
                <span class="btn-nav fs-4 text-white d-none">
                    <i class="fas fa-bars"></i>
                </span>
                <span class="nav-2 fs-4 text-white">داشبورد</span>
            </div>
            <div class="col-lg-6">
                <div class="prof-admin d-flex justify-content-end">
                    <form action="<?php echo e(route('logout')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="fs-6 ms-4 text-danger btn"><i class="fa fa-sign-out-alt ms-1"></i>خروج</button>

                    </form>
                    <div class="profile text-start text-white">
                        <p>سلام <?php echo e(auth()->user()->first_name . ' ' . auth()->user()->last_name); ?> خوش اومدی ,</p>
                        <span class="d-block text-muted">شما <?php echo e(auth()->user()->userType()); ?> هستید.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="informaition my-4">
            <div class="row">
                <div class="col-lg-3 ps-2">
                    <div class="box rounded-3">
                        <div class="box-icon"><i class="fa fa-clipboard"></i></div>
                        <div class="box-text">
                            <h4><?php echo e($setting['blog']); ?></h4>
                            <h4 class="text-muted fs-5 mt-4">پست ها</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ps-2 mt-3 mt-lg-0">
                    <div class="box rounded-3">
                        <div class="box-icon"><i class="fa fa-comments"></i></div>
                        <div class="box-text">
                            <h4><?php echo e($setting['user']); ?></h4>
                            <h4 class="text-muted fs-5 mt-4">کامنت ها</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ps-2 mt-3 mt-lg-0">
                    <div class="box rounded-3">
                        <div class="box-icon"><i class="fa fa-users"></i></div>
                        <div class="box-text">
                            <h4><?php echo e($setting['user']); ?></h4>
                            <h4 class="text-muted fs-5 mt-4">کاربران</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ps-2 mt-3 mt-lg-0">
                    <div class="box rounded-3">
                        <div class="box-icon"><i class="fa fa-images"></i></div>
                        <div class="box-text">
                            <h4><?php echo e($setting['project']); ?></h4>
                            <h4 class="text-muted fs-5 mt-4">پروژه ها</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->yieldContent('main-content'); ?>
    </div>
    <?php echo $__env->make('admin.layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('script'); ?>
    <?php echo $__env->make('admin.alerts.sweetalert.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.alerts.sweetalert.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</body>

</html>
<?php /**PATH D:\laravel-project\compony\compony\resources\views/admin/layouts/master.blade.php ENDPATH**/ ?>