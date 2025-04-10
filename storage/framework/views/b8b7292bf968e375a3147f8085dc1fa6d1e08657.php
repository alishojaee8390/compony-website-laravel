

<?php $__env->startSection('title'); ?>
    <title>ایجاد بخش بلاگ ها</title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">ایجاد پست</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="<?php echo e(route('blog.index')); ?>" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="<?php echo e(route('blog.store')); ?>" method="post" enctype="multipart/form-data" id="form">
                <?php echo csrf_field(); ?>
                <div class="row mt-3">

                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="subject" class="form-label">عنوان بلاگ :</label>
                        <input type="text" class="form-control p-1 mb-2" id="subject" name="subject"
                            placeholder="عنوان بلاگ را وارد کنید" value="<?php echo e(old('subject')); ?>">
                        <?php $__errorArgs = ['subject'];
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
                        <label for="category_id" class="form-label">دسته بندی :</label>
                        <select name="category_id" id="category_id" class="form-control p-1 mb-2">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        <?php $__errorArgs = ['category_id'];
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
                            value="<?php echo e(old('image')); ?>">
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
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="alt" class="form-label">آلت بلاگ :</label>
                        <input type="text" class="form-control p-1 mb-2" id="alt" name="alt"
                            placeholder="آلت بلاگ را وارد کنید" value="<?php echo e(old('alt')); ?>">
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
                        <label for="body" class="form-label">توضیحات بلاگ :</label>
                        <textarea name="body" id="body" cols="30" rows="30"><?php echo e(old('body')); ?></textarea>
                        <?php $__errorArgs = ['body'];
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
                    <h5 class="text-white my-3">بخش سئو بلاگ</h5>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="title" class="form-label">عنوان صفحه :</label>
                        <input type="text" class="form-control p-1 mb-2" id="title" name="title"
                            placeholder="عنوان صفحه را وارد کنید" value="<?php echo e(old('title')); ?>">
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
                        <label for="description" class="form-label">درباره صفحه :</label>
                        <input type="text" class="form-control p-1 mb-2" id="description" name="description"
                            placeholder="درباره صفحه را وارد کنید" value="<?php echo e(old('description')); ?>">
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
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="keywords" class="form-label">کلمه کلیدی :</label>
                        
                        <input type="hidden" class="form-control p-1 mb-2" id="keywords" name="keywords"
                            value="<?php echo e(old('keywords')); ?>">
                        <select class="select2 form-control p-1 mb-2" id="select_keywords" multiple></select>
                        <?php $__errorArgs = ['keywords'];
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

<?php $__env->startSection('script'); ?>

<script>
        CKEDITOR.replace('body')
        $(document).ready(function() {
            let keywords_input = $('#keywords');
            let select_keywords = $('#select_keywords')
            let defualt_keywords = keywords_input.val();
            let defualt_data = null;

            if (keywords_input.val() !== null && keywords_input.val().length > 0) {
                defualt_data = defualt_keywords.split(',');
            }
            select_keywords.select2({
                placeholder: "تگ ها را وارد کنید ",
                tags: true,
                data: defualt_data
            });
            select_keywords.children('option').attr('selected', true).trigger('change');
            $('#form').submit(function(e) {
                if (select_keywords.val() !== null && select_keywords.val().length > 0) {
                    let selectedSource = select_keywords.val().join(',');
                    keywords_input.val(selectedSource);
                }
            })
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-project\compony\compony\resources\views/admin/blog/create.blade.php ENDPATH**/ ?>