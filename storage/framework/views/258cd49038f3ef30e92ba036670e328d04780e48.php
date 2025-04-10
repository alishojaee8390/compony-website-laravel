
   


   <?php $__env->startSection('main-content'); ?>

      <div class="main-content rounded-3">
        <div class="main-content-item">
            <div class="old-project">
                <h3>آخرین بلاگ ها</h3>
                <section class="table-responsive mt-5">
                  <table class="admin-table table table-hover">
                      <thead>
                          <tr>
                              <th scope="col" class="text-center">#</th>
                              <th scope="col" class="text-center">عنوان</th>
                              <th scope="col" class="text-center">متن</th>
                              <th scope="col" class="text-center">عکس</th>
                              <th scope="col" class="w-16-rem text-center"><i class="fa fa-cogs ms-2"></i>تنظیمات</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                              <th scope="row" class="text-center"><?php echo e($key + 1); ?></th>
                              <td class="text-center"><?php echo e($blog->subject); ?></td>
                              <td class="text-center"><?php echo e(Str::Limit(strip_tags($blog->body , 30))); ?></td>
                              <td class="text-center img-fluid"><img src="<?php echo e(asset('images/blog/'.$blog->image)); ?>" style="width: 45px; height: 45px;" alt="<?php echo e($blog->title); ?>"></td>
                              <td class="d-flex gap-2 text-start justify-content-end w-16-rem align-items-center">
                                <div class="mb-2">
                                    <a href="<?php echo e(route('blog.detail', $blog->id)); ?>"
                                        class="btn btn-info text-white p-2" target="_blank">
                                        <i class="fa fa-eye ms-2"></i>
                                        نمایش
                                    </a>
                                </div>
                              </td>
                            </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
                      </tbody>
                  </table>
              </section>
            </div>
        </div>
      </div>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-project\compony\compony\resources\views/admin/index.blade.php ENDPATH**/ ?>