<div class="top-header">
    <div class="container">
      <div class="row">
        <div class="col-8 col-lg-9">
          <div class="row my-3">
            <div class="col-lg-6 col-xl-5">
              <div class="email-address">
                آدرس ایمیل :
                <span><?php echo e($topHeader->email); ?></span>
              </div>
            </div>
            <div class="col-lg-6 col-xl-5">
              <div class="call">
                شماره تماس :
                <span><?php echo e($topHeader->phone); ?></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4 col-lg-3 my-3">
          <div class="top-header-social">
            <div class="row">
              <div class="col-lg-12">
                <ul>
                  <li>
                    <a href="<?php echo e($topHeader->url_instagram); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="<?php echo e($topHeader->url_facebook); ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="<?php echo e($topHeader->url_twitter); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><?php /**PATH D:\laravel-project\compony\compony\resources\views/layouts/top-nav.blade.php ENDPATH**/ ?>