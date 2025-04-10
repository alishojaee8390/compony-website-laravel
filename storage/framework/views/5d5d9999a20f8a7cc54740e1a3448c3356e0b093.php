<div id="mySlidenav" class="slidenav">
  <p class="logo mb-4 mt-2 d-none d-lg-block"><span>S</span>rina</p>
  <div class="d-flex align-items-center justify-content-between p-3">
    <p class="logo mb-4 mt-2 d-block d-lg-none"><span>S</span>rina</p>
    <span class="btn-close d-block d-lg-none mb-4">
      <i class="fa fa-window-close fs-2 text-white "></i>
      </span>
  </div>
    <a href="<?php echo e(route('home')); ?>" class="icon-a <?php if(request()->is('home')): ?>
      is-active
    <?php endif; ?>" target="_blank">
      <span class="icon"><i class="fa fa-eye"></i></span>
      نمایش وب سایت
    </a>
    <a href="<?php echo e(route('admin.index')); ?>" class="icon-a <?php if(request()->is('dashboard')): ?>
      is-active
    <?php endif; ?>">
      <span class="icon"><i class="fa fa-home"></i></span>
      داشبورد
    </a>
    <a href="<?php echo e(route('seo.index')); ?>" class="icon-a <?php if(request()->is('dashboard/seo')): ?>
      is-active
      <?php endif; ?>">
      <span class="icon"><i class="fa fa-magic"></i></span>
      سئو سایت
    </a>
    <?php if(auth()->user()->user_type === 1): ?>
    <div class="slidenav-title me-3 mt-3">
      <span>تنظیمات صفحه اصلی سایت</span>
    </div>
    <a href="<?php echo e(route('top-header.index')); ?>" class="icon-a <?php if(request()->is('dashboard/top-header')): ?>
      is-active
      <?php endif; ?>">
      <span class="icon"><i class="fa fa-ellipsis-h"></i></span>
      منوی بالایی
    </a>
    <a href="<?php echo e(route('menu.index')); ?>" class="icon-a <?php if(request()->is('dashboard/menu')): ?>
      is-active
      <?php endif; ?>">
      <span class="icon"><i class="fa fa-bars"></i></span>
      منوی سایت
    </a>
    <a href="<?php echo e(route('hero.index')); ?>" class="icon-a <?php if(request()->is('dashboard/hero')): ?>
      is-active
      <?php endif; ?>">
      <span class="icon"><i class="fa fa-laptop-house"></i></span>
      خانه
    </a>
    <a href="<?php echo e(route('about.index')); ?>" class="icon-a <?php if(request()->is('dashboard/about')): ?>
      is-active
      <?php endif; ?>">
      <span class="icon"><i class="fa fa-address-card "></i></span>
      درباره ما
    </a>
    <a href="<?php echo e(route('intro.index')); ?>" class="icon-a <?php if(request()->is('dashboard/intro')): ?>
      is-active
      <?php endif; ?>">
      <span class="icon"><i class="fa fa-book-open"></i></span>
      مقدمه
    </a>
    <a href="<?php echo e(route('service.index')); ?>" class="icon-a <?php if(request()->is('dashboard/service')): ?>
      is-active
      <?php endif; ?>">
      <span class="icon"><i class="fa fa-cogs"></i></span>
      خدمات
    </a>
    <a href="<?php echo e(route('counter.index')); ?>" class="icon-a <?php if(request()->is('dashboard/counter')): ?>
      is-active
      <?php endif; ?>">
      <span class="icon"><i class="fa fa-sort-numeric-up"></i></span>
      شمارنده
    </a>
    <a href="<?php echo e(route('team.index')); ?>" class="icon-a  <?php if(request()->is('dashboard/team')): ?>
      is-active
      <?php endif; ?>">
      <span class="icon"><i class="fa fa-user-friends"></i></span>
      تیم
    </a>
    <a href="<?php echo e(route('project.index')); ?>" class="icon-a <?php if(request()->is('dashboard/project')): ?>
      is-active
      <?php endif; ?>">
      <span class="icon"><i class="fa fa-images"></i></span>
      نمونه کار ها
    </a>
    <a href="<?php echo e(route('testimonial.index')); ?>" class="icon-a  <?php if(request()->is('dashboard/testimonial')): ?>
      is-active
      <?php endif; ?>">
      <span class="icon"><i class="fa fa-comment-alt"></i></span>
      نظرات مشتریان
    </a>
    <a href="<?php echo e(route('faq.index')); ?>" class="icon-a <?php if(request()->is('dashboard/contact')): ?>
      is-active
    <?php endif; ?>">
      <span class="icon"
        ><i class="fa fa-clipboard-list"></i></span
      >
      سوالات متداول
    </a>
    <div class="slidenav-title me-3 mt-3"><span>تنظیمات فوتر سایت</span><i></i></div>
    <a href="<?php echo e(route('footer-about.index')); ?>" class="icon-a <?php if(request()->is('dashboard/footer-about')): ?>
      is-active
    <?php endif; ?>">
      <span class="icon"
        ><i class="fa fa-clipboard-list"></i></span
      >
      فوتر - درباره ما
    </a>
    <a href="<?php echo e(route('footer-quick-menu.index')); ?>" class="icon-a <?php if(request()->is('dashboard/footer-quick-menu')): ?>
      is-active
    <?php endif; ?>">
      <span class="icon"
        ><i class="fa fa-hand-holding"></i></span
      >
      فوتر - دسترسی سریع
    </a>
    <a href="<?php echo e(route('footer-contact.index')); ?>" class="icon-a <?php if(request()->is('dashboard/footer-contact')): ?>
      is-active
    <?php endif; ?>">
      <span class="icon"
        ><i class="fa fa-phone"></i></span
      >
      فوتر - تماس باما
    </a>
    <div class="slidenav-title me-3 mt-3"><span>صفحات سایت</span><i></i></div>
   
    <a href="<?php echo e(route('users.index')); ?>" class="icon-a <?php if(request()->is('dashboard/users')): ?>
      is-active
    <?php endif; ?>">
      <span class="icon"><i class="fa fa-user-lock"></i></span>
      ادمین ها
    </a>
    <?php endif; ?>
    <a href="#" class="icon-a">
      <span class="icon"><i class="fa fa-comments"></i></span>
      نظرات
    </a>
    <a href="<?php echo e(route('contact.index')); ?>" class="icon-a <?php if(request()->is('dashboard/contact')): ?>
      is-active
    <?php endif; ?>">
      <span class="icon"><i class="fa fa-users"></i></span>
      پیام کاربران
    </a>
    <a href="<?php echo e(route('category.index')); ?>" class="icon-a <?php if(request()->is('dashboard/category')): ?>
      is-active
    <?php endif; ?>">
      <span class="icon"><i class="fa fa-"></i></span>
      دسته بندی
    </a>
    <a href="<?php echo e(route('blog.index')); ?>" class="icon-a <?php if(request()->is('dashboard/blog')): ?>
      is-active
    <?php endif; ?>">
      <span class="icon"><i class="fa fa-blog"></i></span>
      بلاگ
    </a>
  </div><?php /**PATH D:\laravel-project\compony\compony\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>