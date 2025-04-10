

<?php $__env->startSection('title'); ?>
    <title>ویرایش بخش درباره ما</title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">ویرایش بخش درباره ما</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="<?php echo e(route('about.index')); ?>" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="<?php echo e(route('about.update', $about->id)); ?>" method="post" enctype="multipart/form-data">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <div class="row mt-3">

                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="title" class="form-label">عنوان خدمات :</label>
                        <input type="text" class="form-control p-1 mb-2" id="title" name="title"
                            placeholder="عنوان خدمات را وارد کنید" value="<?php echo e(old('title', $about->title)); ?>">
                        <?php $__errorArgs = ['title'];
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
               
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="subtitle" class="form-label">زیر عنوان خدمات :</label>
                        <input type="text" class="form-control p-1 mb-2" id="subtitle" name="subtitle"
                            placeholder="زیر عنوان خدمات را وارد کنید" value="<?php echo e(old('subtitle', $about->subtitle)); ?>">
                        <?php $__errorArgs = ['subtitle'];
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

                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="helper" class="form-label">درباره عنوان :</label>
                        <input type="text" class="form-control p-1 mb-2" id="helper" name="helper"
                            placeholder="درباره عنوان را وارد کنید" value="<?php echo e(old('helper', $about->helper)); ?>">
                        <?php $__errorArgs = ['helper'];
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
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="image" class="form-label">تصویر :</label>
                        <input type="file" class="form-control p-1 mb-2" id="image" name="image"
                           value="<?php echo e(old('image', $about->image)); ?>">
                        <?php $__errorArgs = ['image'];
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
                    
                    <div class="col-12 mt-3 p-2">
                        <label for="alt" class="form-label">آلت تصویر :</label>
                        <input type="text" class="form-control p-1 mb-2" id="alt" name="alt"
                            placeholder="آلت تصویر" value="<?php echo e(old('alt', $about->alt)); ?>">
                        <?php $__errorArgs = ['alt'];
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
                   
                    <div class="col-12 mt-3 p-2">
                        <label for="description" class="form-label">درباره شرکت :</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control p-2 mt-2 mb-2" placeholder="توضیحات سایت را وارد کنید"><?php echo e(old('description' , $about->description)); ?></textarea>
                        <?php $__errorArgs = ['description'];
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
                    <h3 class="text-white p-2 m-2">تنظیم خدمات</h3>
                    <div class="col-12 col-md-3 mt-3 p-2">
                        <label for="serivce_title_1" class="form-label">عنوان خدمت 1 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="serivce_title_1" name="serivce_title_1"
                            placeholder="عنوان خدمت 1" value="<?php echo e(old('serivce_title_1', $about->serivce_title_1)); ?>">
                        <?php $__errorArgs = ['serivce_title_1'];
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
                    <div class="col-12 col-md-3 mt-3 p-2">
                        <label for="serivce_desc_1" class="form-label">توضیحات خدمت 1 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="serivce_desc_1" name="serivce_desc_1"
                            placeholder="توضیحات خدمت 1" value="<?php echo e(old('serivce_desc_1', $about->serivce_desc_1)); ?>">
                        <?php $__errorArgs = ['serivce_desc_1'];
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
                    <div class="col-12 col-md-3 mt-3 p-2">
                        <label for="serivce_title_2" class="form-label">عنوان خدمت 2 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="serivce_title_2" name="serivce_title_2"
                            placeholder="عنوان خدمت 2" value="<?php echo e(old('serivce_title_2', $about->serivce_title_2)); ?>">
                        <?php $__errorArgs = ['serivce_title_2'];
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
                    <div class="col-12 col-md-3 mt-3 p-2">
                        <label for="serivce_desc_2" class="form-label">توضیحات خدمت 2 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="serivce_desc_2" name="serivce_desc_2"
                            placeholder="توضیحات خدمت 2" value="<?php echo e(old('serivce_desc_2', $about->serivce_desc_2)); ?>">
                        <?php $__errorArgs = ['serivce_desc_2'];
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
                    <div class="col-12 col-md-3 mt-3 p-2">
                        <label for="serivce_title_3" class="form-label">عنوان خدمت 3 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="serivce_title_3" name="serivce_title_3"
                            placeholder="عنوان خدمت 3" value="<?php echo e(old('serivce_title_3', $about->serivce_title_3)); ?>">
                        <?php $__errorArgs = ['serivce_title_3'];
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
                    <div class="col-12 col-md-3 mt-3 p-2">
                        <label for="serivce_desc_3" class="form-label">توضیحات خدمت 3 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="serivce_desc_3" name="serivce_desc_3"
                            placeholder="توضیحات خدمت 3" value="<?php echo e(old('serivce_desc_3', $about->serivce_desc_3)); ?>">
                        <?php $__errorArgs = ['serivce_desc_3'];
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
                    <div class="col-12 col-md-3 mt-3 p-2">
                        <label for="serivce_title_4" class="form-label">عنوان خدمت 4 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="serivce_title_4" name="serivce_title_4"
                            placeholder="عنوان خدمت 4" value="<?php echo e(old('serivce_title_4', $about->serivce_title_4)); ?>">
                        <?php $__errorArgs = ['serivce_title_4'];
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
                    <div class="col-12 col-md-3 mt-3 p-2">
                        <label for="serivce_desc_4" class="form-label">توضیحات خدمت 4 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="serivce_desc_4" name="serivce_desc_4"
                            placeholder="توضیحات خدمت 4" value="<?php echo e(old('serivce_desc_4', $about->serivce_desc_4)); ?>">
                        <?php $__errorArgs = ['serivce_desc_4'];
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

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-project\compony\compony\resources\views/admin/about/edit.blade.php ENDPATH**/ ?>