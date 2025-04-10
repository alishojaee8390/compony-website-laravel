<div id="mySlidenav" class="slidenav">
  <p class="logo mb-4 mt-2 d-none d-lg-block"><span>S</span>rina</p>
  <div class="d-flex align-items-center justify-content-between p-3">
    <p class="logo mb-4 mt-2 d-block d-lg-none"><span>S</span>rina</p>
    <span class="btn-close d-block d-lg-none mb-4">
      <i class="fa fa-window-close fs-2 text-white "></i>
      </span>
  </div>
    <a href="{{route('home')}}" class="icon-a @if(request()->is('home'))
      is-active
    @endif" target="_blank">
      <span class="icon"><i class="fa fa-eye"></i></span>
      نمایش وب سایت
    </a>
    <a href="{{route('admin.index')}}" class="icon-a @if(request()->is('dashboard'))
      is-active
    @endif">
      <span class="icon"><i class="fa fa-home"></i></span>
      داشبورد
    </a>
    <a href="{{route('seo.index')}}" class="icon-a @if(request()->is('dashboard/seo'))
      is-active
      @endif">
      <span class="icon"><i class="fa fa-magic"></i></span>
      سئو سایت
    </a>
    @if (auth()->user()->user_type === 1)
    <div class="slidenav-title me-3 mt-3">
      <span>تنظیمات صفحه اصلی سایت</span>
    </div>
    <a href="{{route('top-header.index')}}" class="icon-a @if(request()->is('dashboard/top-header'))
      is-active
      @endif">
      <span class="icon"><i class="fa fa-ellipsis-h"></i></span>
      منوی بالایی
    </a>
    <a href="{{route('menu.index')}}" class="icon-a @if(request()->is('dashboard/menu'))
      is-active
      @endif">
      <span class="icon"><i class="fa fa-bars"></i></span>
      منوی سایت
    </a>
    <a href="{{route('hero.index')}}" class="icon-a @if(request()->is('dashboard/hero'))
      is-active
      @endif">
      <span class="icon"><i class="fa fa-laptop-house"></i></span>
      خانه
    </a>
    <a href="{{route('about.index')}}" class="icon-a @if(request()->is('dashboard/about'))
      is-active
      @endif">
      <span class="icon"><i class="fa fa-address-card "></i></span>
      درباره ما
    </a>
    <a href="{{route('intro.index')}}" class="icon-a @if(request()->is('dashboard/intro'))
      is-active
      @endif">
      <span class="icon"><i class="fa fa-book-open"></i></span>
      مقدمه
    </a>
    <a href="{{route('service.index')}}" class="icon-a @if(request()->is('dashboard/service'))
      is-active
      @endif">
      <span class="icon"><i class="fa fa-cogs"></i></span>
      خدمات
    </a>
    <a href="{{route('counter.index')}}" class="icon-a @if(request()->is('dashboard/counter'))
      is-active
      @endif">
      <span class="icon"><i class="fa fa-sort-numeric-up"></i></span>
      شمارنده
    </a>
    <a href="{{route('team.index')}}" class="icon-a  @if(request()->is('dashboard/team'))
      is-active
      @endif">
      <span class="icon"><i class="fa fa-user-friends"></i></span>
      تیم
    </a>
    <a href="{{route('project.index')}}" class="icon-a @if(request()->is('dashboard/project'))
      is-active
      @endif">
      <span class="icon"><i class="fa fa-images"></i></span>
      نمونه کار ها
    </a>
    <a href="{{route('testimonial.index')}}" class="icon-a  @if(request()->is('dashboard/testimonial'))
      is-active
      @endif">
      <span class="icon"><i class="fa fa-comment-alt"></i></span>
      نظرات مشتریان
    </a>
    <a href="{{route('faq.index')}}" class="icon-a @if(request()->is('dashboard/contact'))
      is-active
    @endif">
      <span class="icon"
        ><i class="fa fa-clipboard-list"></i></span
      >
      سوالات متداول
    </a>
    <div class="slidenav-title me-3 mt-3"><span>تنظیمات فوتر سایت</span><i></i></div>
    <a href="{{route('footer-about.index')}}" class="icon-a @if(request()->is('dashboard/footer-about'))
      is-active
    @endif">
      <span class="icon"
        ><i class="fa fa-clipboard-list"></i></span
      >
      فوتر - درباره ما
    </a>
    <a href="{{route('footer-quick-menu.index')}}" class="icon-a @if(request()->is('dashboard/footer-quick-menu'))
      is-active
    @endif">
      <span class="icon"
        ><i class="fa fa-hand-holding"></i></span
      >
      فوتر - دسترسی سریع
    </a>
    <a href="{{route('footer-contact.index')}}" class="icon-a @if(request()->is('dashboard/footer-contact'))
      is-active
    @endif">
      <span class="icon"
        ><i class="fa fa-phone"></i></span
      >
      فوتر - تماس باما
    </a>
    <div class="slidenav-title me-3 mt-3"><span>صفحات سایت</span><i></i></div>
   
    <a href="{{route('users.index')}}" class="icon-a @if(request()->is('dashboard/users'))
      is-active
    @endif">
      <span class="icon"><i class="fa fa-user-lock"></i></span>
      ادمین ها
    </a>
    @endif
    <a href="#" class="icon-a">
      <span class="icon"><i class="fa fa-comments"></i></span>
      نظرات
    </a>
    <a href="{{route('contact.index')}}" class="icon-a @if(request()->is('dashboard/contact'))
      is-active
    @endif">
      <span class="icon"><i class="fa fa-users"></i></span>
      پیام کاربران
    </a>
    <a href="{{route('category.index')}}" class="icon-a @if(request()->is('dashboard/category'))
      is-active
    @endif">
      <span class="icon"><i class="fa fa-"></i></span>
      دسته بندی
    </a>
    <a href="{{route('blog.index')}}" class="icon-a @if(request()->is('dashboard/blog'))
      is-active
    @endif">
      <span class="icon"><i class="fa fa-blog"></i></span>
      بلاگ
    </a>
  </div>