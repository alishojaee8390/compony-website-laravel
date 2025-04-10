<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="hamburger-menu" id="hamburger-menu"><i class="fa fa-bars"></i></div>
            <div class="logo ms-3">
                <a href="">House</a>
            </div>

            <ul class="navbar-nav ms-auto">
                <div class="close-menu d-lg-none"><i class="fa fa-times"></i></div>
                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="nav-item">
                    <a class="nav-link <?php if($loop->first): ?>
                      active
                    <?php endif; ?> " aria-current="page" href="<?php echo e($menu->link); ?>"><?php echo e($menu->title); ?></a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>


        </div>
    </nav>
    <div class="overlay-menu">

    </div>
</header>
<?php /**PATH D:\laravel-project\compony\backend\compony\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>