
<?php $__env->startSection('head-tag'); ?>
<?php echo $__env->make('layouts.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="hero-wrap" style="background-image: url(<?php echo e(asset('images/hero/' . $hero->image)); ?>)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row min-vh-100 align-items-center justify-content-center text-center">
                <div class="col-lg-9">
                    <div class="hero-wrap-content">
                        <span class="subheading text-white fs-5 fw-bold">از <?php echo e($hero->established); ?></span>
                        <h1 class="fs-1 text-white fw-bold lh-5 py-3 my-5">
                            <?php echo e($hero->description); ?>

                        </h1>
                        <p class="mt-5">
                            <a href="<?php echo e($hero->contact); ?>" class="btn btn-dark w-25 py-2 shadow-none">تماس با ما</a>
                            <a href="<?php echo e($hero->question); ?>"
                                class="btn btn-primary w-25 py-2 text-white shadow-none border-0">سوالات متداول</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-content">
                        <h5 class="text-primary"><?php echo e($about->title); ?></h5>
                        <h1 class="fs-1 fw-bold py-2 text-dark">
                            <?php echo e($about->subtitle); ?>

                        </h1>
                        <p class="text-muted py-4">
                            <?php echo e($about->description); ?>

                        </p>
                        <h2 class="fs-3 mb-5 text-dark"><?php echo e($about->helper); ?></h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="services d-flex align-items-center">
                                    <div class="services-img w-25">
                                        <i class="fa fa-building fa-3x text-primary"></i>
                                    </div>
                                    <div class="services-text w-75 px-2 py-2">
                                        <h3 class="fs-5"><?php echo e($about->serivce_title_1); ?></h3>
                                        <p class="text-muted">
                                            <?php echo e($about->serivce_desc_1); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services d-flex align-items-center">
                                    <div class="services-img w-25">
                                        <i class="fa fa-anchor fa-3x text-primary"></i>
                                    </div>
                                    <div class="services-text w-75 px-2 py-2">
                                        <h3 class="fs-5"><?php echo e($about->serivce_title_2); ?></h3>
                                        <p class="text-muted">
                                            <?php echo e($about->serivce_desc_2); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services d-flex align-items-center">
                                    <div class="services-img w-25">
                                        <i class="fa fa-headphones fa-3x text-primary"></i>
                                    </div>
                                    <div class="services-text w-75 px-2 py-2">
                                        <h3 class="fs-5"><?php echo e($about->serivce_title_3); ?></h3>
                                        <p class="text-muted">
                                            <?php echo e($about->serivce_desc_3); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services d-flex align-items-center">
                                    <div class="services-img w-25">
                                        <i class="fa fa-building fa-3x text-primary"></i>
                                    </div>
                                    <div class="services-text w-75 px-2 py-2">
                                        <h3 class="fs-5"><?php echo e($about->serivce_title_4); ?></h3>
                                        <p class="text-muted">
                                            <?php echo e($about->serivce_desc_4); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img">
                        <img src="<?php echo e(asset('images/about/' . $about->image)); ?>" alt="<?php echo e($about->alt); ?>"
                            class=" about-img">
                    </div>
                </div>
            </div>
    </section>
    <section class="intro py-5" style="background-image: url(<?php echo e(asset('images/intro/' . $intro->image)); ?>)">
        <div class="overlay"></div>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-10">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-8">
                            <div class="intro-text">
                                <h6 class="text-white">
                                    <?php echo e($intro->title); ?>

                                </h6>
                                <h1 class="mt-3 text-white"> <?php echo e($intro->description); ?></h1>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="intro-btn">
                                <a href="  <?php echo e($intro->link); ?>" class="btn btn-primary px-5 py-3 w-75 shadow-none">تماس
                                    بگیرید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service py-5">
        <div class="container py-5">
            <div class="service-title">
                <h6 class="fs-6 fw-bold text-center text-primary">ما چیکار میکنیم</h6>
                <h1 class="fw-bold text-center mt-4">خدمات ما</h1>
            </div>
            <div class="row py-5">
                <div class="col-md-6">
                    <div class="service-item d-flex px-4 py-5 shadow-sm mb-4 rounded-3">
                        <div class="service-item-img">
                            <i class="fa fa-building text-white fa-3x"></i>
                        </div>
                        <div class="service-item-text pe-3">
                            <h2 class="text-white fs-3 mb-3"><?php echo e($service->service_title_1); ?></h2>
                            <p class="text-white fs-6">
                                <?php echo e($service->service_desc_1); ?>

                            </p>
                            <a href="" class="btn btn-light text-primary fw-bold">بیشتر بخوانید</a>
                        </div>
                    </div>
                    <div class="service-item d-flex px-4 py-5 shadow-sm mb-4 rounded-3 bg-primary">
                        <div class="service-item-img">
                            <i class="fa fa-building text-white fa-3x"></i>
                        </div>
                        <div class="service-item-text pe-3">
                            <h2 class="text-white fs-3 mb-3"><?php echo e($service->service_title_2); ?></h2>
                            <p class="text-white fs-6">
                                <?php echo e($service->service_desc_2); ?>

                            </p>
                            <a href="" class="btn btn-light text-primary fw-bold">بیشتر بخوانید</a>
                        </div>
                    </div>
                    <div class="service-item d-flex px-4 py-5 shadow-sm rounded-3">
                        <div class="service-item-img">
                            <i class="fa fa-building text-white fa-3x"></i>
                        </div>
                        <div class="service-item-text pe-3">
                            <h2 class="text-white fs-3 mb-3"><?php echo e($service->service_title_3); ?></h2>
                            <p class="text-white fs-6">
                                <?php echo e($service->service_desc_3); ?>

                            </p>
                            <a href="" class="btn btn-light text-primary fw-bold">بیشتر بخوانید</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-img w-100 d-flex">
                        <img src="<?php echo e(asset('images/service/' . $service->image)); ?>" class="w-100 h-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row py-4">
                <?php $__currentLoopData = $counters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $counter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item text-center p-3">
                            <div class="counter-img">
                                <i class="<?php echo e($counter->icon); ?> fa-3x mb-2 text-white"></i>
                            </div>
                            <div class="counter-text">
                                <div class="counter mb-2 text-white"><?php echo e($counter->title); ?></div>
                                <div class="counter-text-name text-light">
                                    <?php echo e($counter->description); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container py-5">
            <div class="team-title">
                <h6 class="fs-6 fw-bold text-center text-primary">تیم و کارکنان</h6>
                <h1 class="fw-bold text-center mt-4">اعضای تیم</h1>
            </div>
            <div class="row mt-5">
                <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="team-item rounded-3 shadow">
                            <div class="team-item-img">
                                <img src="<?php echo e(asset('images/team/' . $team->image)); ?>" alt="<?php echo e($team->alt); ?>">
                                <ul>
                                    <li>
                                        <a href="<?php echo e($team->url_instagram); ?>"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e($team->url_facebook); ?>"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e($team->url_twitter); ?>"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e($team->url_linkden); ?>"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-item-text py-3">
                                <h4 class="text-center fw-bold fs-5"><?php echo e($team->fullName); ?></h4>
                                <h6 class="text-center text-muted fs-6"><?php echo e($team->job); ?></h6>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <section class="project py-5">
        <div class="project-title py-5">
            <h6 class="fs-6 fw-bold text-center text-primary">نمونه کار ها</h6>
            <h1 class="fw-bold text-center mt-4">پروژه ها</h1>
        </div>
        <div class="row w-100">
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="project-item">
                        <img src="<?php echo e(asset('images/project/' . $project->image)); ?>" alt="<?php echo e($project->title); ?>"
                            class="w-100" />
                        <div class="project-search">
                            <a href=""><i class="fa fa-search"></i></a>
                        </div>
                        <div class="project-description">
                            <h2 class="text-white fs-5"><?php echo e($project->title); ?></h2>
                            <h3 class="fs-4 text-white"><?php echo e($project->description); ?></h3>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <section class="testimonial py-5">
        <div class="testimonial-title">
            <h6 class="fs-6 fw-bold text-center text-primary">نظرات مشتریان</h6>
            <h1 class="fw-bold text-center mt-4">مشتریان خوشحال</h1>
        </div>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-7">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" class="bg-primary" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" class="bg-primary" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" class="bg-primary" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner pb-5">
                            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div
                                    class="slider-item bg-white p-4 shadow carousel-item <?php if($loop->first): ?> active <?php endif; ?>">
                                    <div class="slider-item-info d-flex">
                                        <img src="<?php echo e(asset('/images/testimonial/' . $testimonial->image)); ?>"
                                            class="rounded-circle px-3" alt="" />
                                        <div class="information">
                                            <h3 class="fs-5"><?php echo e($testimonial->fullName); ?></h3>
                                            <h4 class="fs-6 fw-bold mt-2 text-primary">
                                                <?php echo e($testimonial->job); ?>

                                            </h4>
                                        </div>
                                    </div>
                                    <div class="slider-item-description">
                                        <p class="text-muted mt-5 fs-6">
                                            <?php echo e($testimonial->description); ?>

                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blogs py-5">
        <div class="blog-title">
            <h6 class="fs-6 fw-bold text-center text-primary">وبلاگ ما</h6>
            <h1 class="fw-bold text-center mt-4">بلاگ های اخیر</h1>
        </div>
        <div class="container py-5">
            <div class="row">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                        <div class="blog-item shadow">
                            <div class="blog-img position-relative">
                                <a href="">
                                    <img src="<?php echo e(asset('images/blog/' . $blog->image)); ?>" alt="<?php echo e($blog->alt); ?>"
                                        class="w-100 bg-white" />
                                    <div class="date"><?php echo e($blog->jalaliDate($blog->created_at, '%d %B %Y')); ?></div>
                                </a>
                            </div>
                            <div class="blog-text px-4">
                                <div class="blog-info d-flex py-3">
                                    <div class="author d-flex">
                                        <i class="fa fa-user"></i>
                                        <h6 class="pe-1"><?php echo e($blog->user->FullName); ?></h6>
                                    </div>
                                    <div class="comment text-primary d-flex pe-3">
                                        <i class="fa fa-comment"></i>
                                        <h6 class="pe-1">5 کامنت</h6>
                                    </div>
                                </div>
                                <div class="blog-text-title">
                                    <a href="<?php echo e(route('blog.detail' , $blog->id)); ?>">
                                        <h2 class="fs-4 fw-bold lh-1"><?php echo e($blog->subject); ?></h2>
                                    </a>
                                </div>
                                <div class="blog-description py-3">
                                    <p class="text-muted">
                                        <?php echo e(strip_tags(Str::limit($blog->body, 30))); ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <div class="more-blog text-center mt-5">
                <a href="<?php echo e(route('blog')); ?>" class="btn btn-primary shadow-none px-5">همه بلاگ ها</a>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="row w-100">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <div class="contact-form-title py-4">
                            <h6 class="text-end text-primary">تماس با ما</h6>
                            <h1 class="fs-6 text-end mt-4">با ما تماس بگیرید</h1>
                        </div>
                    </div>
                    <form action="<?php echo e(route('contact')); ?>" method="POST" id="form">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <label for="fullname">نام و نام خانوادگی</label>
                                    <input type="text" class="w-100 p-2 mt-2" placeholder="نام و نام خانوادگی شما"
                                        id="fullname" name="fullname" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <label for="email">ایمیل</label>
                                    <input type="email" name="email" class="w-100 p-2 mt-2" placeholder="ایمیل شما"
                                        id="email" />
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="input-group">
                                    <label for="subject">موضوع</label>
                                    <input type="text" placeholder="موضوع" class="w-100 p-2 mt-2" id="subject"
                                        name="subject" />
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="input-group">
                                    <label for="description">محتوای پیام شما</label>
                                    <textarea id="description" name="description" class="w-100 p-2 mt-2" placeholder="پیام شما"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <button class="btn btn-primary w-25 shadow-none py-2 border-0" type="submit"
                                    id="button">
                                    ارسال
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 mt-5 mt-md-0">
                    <div class="faq">
                        <h6 class="text-primary">سولات متداول</h6>
                        <h1 class="text-dark fw-bold fs-3">
                            می خواهید چیزی از ما بپرسید؟
                        </h1>
                        <p class="mt-5 text-muted">
                            از ما بپرسید تا بتوانیم در سریع ترین زمان مشکل شما رو حل کنیم
                            دوستانتوانیم در سریع ترین زمان مشکل شما رو حل کنیم دوستتوانیم در
                            سریع ترین زمان مشکل شما رو حل کنیم دوستتوانیم در سریع ترین زمان
                            مشکل شما رو حل کنیم دوستتوانیم در سریع ترین زمان مشکل شما رو حل
                            کنیم دوستتوانیم در سریع ترین زمان مشکل شما رو حل کنیم دوستتوانیم
                            در سریع ترین زمان مشکل شما رو حل کنیم دوستتوانیم در سریع ترین
                            زمان مشکل شما رو حل کنیم دوست عزیز
                        </p>
                        <div class="accordion accordion-flush mt-5" id="accordionFlushExample">
                            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading<?php echo e($faq->id); ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse<?php echo e($faq->id); ?>" aria-expanded="false"
                                        aria-controls="flush-collapse<?php echo e($faq->id); ?>">
                                        <?php echo e($faq->question); ?>

                                    </button>
                                </h2>
                                <div id="flush-collapse<?php echo e($faq->id); ?>" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading<?php echo e($faq->id); ?>" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">   <?php echo e($faq->answer); ?></div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $('#form').submit(function(e) {
            e.preventDefault();
            let fullname = $('input[name=fullname]').val();
            let email = $('input[name=email]').val();
            let subject = $('input[name=subject]').val();
            let description = $('textarea[name=description]').val();
            let token = $('input[name=_token]').val();
            let url = $('#form').attr('action');
            $.ajax({
                url: url,
                type: 'post',
                data: {
                    fullname: fullname,
                    email: email,
                    subject: subject,
                    description: description,
                    _token: token
                },
                success: function(data) {
                    if (data == 1) {
                        $.swal({
                            heading: 'موفقیت آمیز',
                            text: 'پیام شما با موفقیت ارسال شد',
                            icon: 'success'
                        })
                        $('input[name=fullname]').val('');
                        $('input[name=email]').val('');
                        $('input[name=subject]').val('');
                        $('textarea[name=description]').val('');
                    }
                }
            })
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-project\compony\backend\compony\resources\views/index.blade.php ENDPATH**/ ?>