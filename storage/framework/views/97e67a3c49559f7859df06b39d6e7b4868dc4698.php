

<?php echo $__env->make('layouts.head-tag', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
    <main class="detail-website py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main-detail">
                        <div class="row">
                            <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        
                          <div class="col-md-6 mt-4">
                            <div class="blog-item shadow-sm">
                                <img src="<?php echo e(asset('images/blog/' . $blog->image)); ?>" alt="<?php echo e($blog->alt); ?>" class="w-100 bg-white p-2" />
                                <h4 class="my-2"><?php echo e($blog->title); ?></h4>
                                <p class="fs-6 text-muted mb-3 mt-3"><?php echo e(Str::Limit(strip_tags($blog->body) ,100)); ?></p>
                                <a href="<?php echo e(route('blog.detail' , $blog->id)); ?>" class="btn btn-primary">ادامه</a>
                            </div>
                        </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div>هیچ پستی پیدا نشد!!</div>
                            <?php endif; ?>
                           
                        </div>
                        <div class="mt-5 text-center">
                            <?php echo e($blogs->links()); ?>

                        </div>
                    </div>
                </div>
                
               
            </div>
           
        </div>
    </main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-project\compony\compony\resources\views/pages/search.blade.php ENDPATH**/ ?>