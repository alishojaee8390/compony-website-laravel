
<?php $__env->startSection('head-tag'); ?>
<title><?php echo e($blog->title); ?></title>
<meta name="description" content="<?php echo e($blog->description); ?>">
<meta name="keywords" content="<?php echo e($blog->keywords); ?>">
<meta name="robots" content="index, follow">
<meta name="twitter:title" content="<?php echo e($blog->title); ?>">
<meta property="og:title" content="<?php echo e($blog->title); ?>">
<meta property="og:description" content="<?php echo e($blog->description); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main class="detail-website py-5">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-8 mt-4">
            <div class="main-datail">
              <div class="row">
                <div class="col-md-12">
                  <div class="blog-item p-3">
                    <div class="blog-item-title mb-3 p-2">
                      <h1 class="fs-5"><?php echo e($blog->title); ?></h1>
                    </div>
                    <div
                      class="blog-item-info d-flex justify-content-between align-items-center mb-2"
                    >
                      <div class="blog-item-author">
                        <i class="fa fa-user ms-2"></i><?php echo e($blog->user->full_name); ?>

                      </div>
                      <div class="blog-item-date">
                        <?php echo e($blog->jalaliDate($blog->created_at , '%Y / %m / %d')); ?>

                        <i class="fa fa-calendar ms-2"></i>
                      </div>
                      <div class="blog-item-read-time">
                        <i class="fa fa-clock ms-2"></i>5 دقیقه
                      </div>
                    </div>
                    <div class="blog-detail-item">

                      <img src="<?php echo e(asset('images/blog/' . $blog->image)); ?>" alt="<?php echo e($blog->alt); ?>" />
                    </div>
                    <p class="my-5">
                     <?php echo e(strip_tags($blog->body)); ?>

                    </p>
                    <div class="comment-section">
                        <div class="comment-title">
                            <h4 class="mb-4 fs-4 text-primary">نظرات </h4>
                        </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="comment-item">
                            <div class="row">
                                <div class="col-lg-1">
                                    <div class="comment-item-img">
                                        <img src="images/testimonial/1.jpg" class="rounded-circle" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-11">
                                    <div class="comment-item-text pe-3">
                                        <div class="comment-item-text-title w-100 d-flex justify-content-between align-items-center">
                                            <h4 class="text-primary fs-6">جواد عزتی</h4>
                                            <a href="" class="text-primary fs-6">پاسخ</a>
                                        </div>
                                        <p class="mt-3 text-muted">  ابزار کاربهترین ابزار کاربهترین ابزار کاربهترین ابزار
                                            کاربهترین ابزار کاربهترین ابزار کاربهترین ابزار کاربهترین
                                            ابزار کاربهترین ابزار کاربهترین ابزار کاربهترین ابزار
                                            کاربهترین ابزار کاربهترین ابزار کاربهترین ابزار کاربهترین
                                            ابزار کاربهترین ابزار کاربهترین ابزار کاربهترین ابزار
                                            کاربهترین ابزار کار</p>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-replay py-2">
                                <div class="row">
                                    <div class="col-lg-1">
                                        <div class="comment-item-img pe-4">
                                            <img src="images/testimonial/1.jpg" class="rounded-circle" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-11">
                                        <div class="comment-item-text pe-5">
                                            <div class="comment-item-text-title w-100 d-flex justify-content-between align-items-center">
                                                <h4 class="text-danger fs-6">مدیر</h4>
                                            </div>
                                            <p class="mt-3 text-white">  ابزار کاربهترین ابزار کاربهترین ابزار کاربهترین ابزار
                                                کاربهترین ابزار کاربهترین ابزار کاربهترین ابزار کاربهترین
                                                ابزار کاربهترین ابزار کاربهترین ابزار کاربهترین ابزار
                                                کاربهترین ابزار کاربهترین ابزار کاربهترین ابزار کاربهترین
                                                ابزار کاربهترین ابزار کاربهترین ابزار کاربهترین ابزار
                                                کاربهترین ابزار کار</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="comment mt-5">
                        <form action="">
                            <div class="input-group">
                                <div class="row w-100">
                                    <div class="col-lg-6 pt-3">
                                        <input type="text" class="form-control" placeholder="نام و نام خانوادگی شما">
                                    </div>
                                    <div class="col-lg-6 pt-3">
                                        <input type="email" class="form-control" placeholder="ایمیل">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="row w-100">
                                    <div class="col-lg-12 pt-3">
                                        <input type="text" class="form-control" placeholder="موضوع">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="row w-100">
                                    <div class="col-lg-12 pt-3">
                                     <textarea name="" id="" class="form-control p-3" placeholder="نظر شما"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary mt-2">ثبت</button>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4">
            <aside class="sidebar p-2 bg-white shadow-sm">
              <div class="row">
                <div class="col-12">
                  <div class="sidebar-item-title mt-3">
                    <h6 class="mb-4">آخرین مقالات</h6>
                  </div>
                 
                  <?php $__currentLoopData = $lastBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lastBlog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                  <div class="sidebar-item pt-3">
                      <div class="sidebar-item-text d-flex align-items-center">
                          <img src="<?php echo e(asset('images/blog/'.$lastBlog->image)); ?>" alt="<?php echo e($blog->alt); ?>">
                          <p class="px-3"><a href="<?php echo e(route('blog.detail' , $lastBlog->id)); ?>" class="fs-6 text-muted"><?php echo e(Str::Limit(strip_tags($lastBlog->body) ,100)); ?></a> </p>
                      </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </main>
<?php $__env->stopSection(); ?> 
 
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-project\compony\compony\resources\views/pages/blog-details.blade.php ENDPATH**/ ?>