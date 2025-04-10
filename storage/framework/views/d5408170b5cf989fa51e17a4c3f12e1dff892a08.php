

<?php echo $__env->make('layouts.head-tag', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
    <main class="detail-website py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main-detail">
                        <div class="row">
                            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                          <div class="col-md-6 mt-4">
                                <div class="blog-item shadow-sm">
                                    <img src="<?php echo e(asset('images/blog/' . $blog->image)); ?>" alt="<?php echo e($blog->alt); ?>" class="w-100 bg-white p-2" />
                                    <h4 class="my-2"><?php echo e($blog->title); ?></h4>
                                    <p class="fs-6 text-muted mb-3 mt-3"><?php echo e(Str::Limit(strip_tags($blog->body) ,100)); ?></p>
                                    <a href="<?php echo e(route('blog.detail' , $blog->id)); ?>" class="btn btn-primary">ادامه</a>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                        </div>
                        <div class="mt-5 text-center">
                            <?php echo e($blogs->links()); ?>

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
                    <aside class="sidebar p-2 bg-white shadow-sm mt-3">
                        <div class="row">
                            <div class="col-12">
                                <div class="sidebar-item-title mt-3">
                                    <h6 class="mb-4">دسته بندی ها</h6>
                                </div>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                <div class="sidebar-item pt-3">
                                    <div class="sidebar-item-text d-flex align-items-center">
                                        <p class="px-3"><a href="<?php echo e(route('search' , $category->id)); ?>" class="fs-6 text-muted"><?php echo e($category->name); ?></a> </p>
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


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-project\compony\compony\resources\views/pages/blog.blade.php ENDPATH**/ ?>