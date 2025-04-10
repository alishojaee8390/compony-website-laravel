<footer class="footer mt-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer-about">
                    <h5 class="fw-bold text-white">شرکت ساختمانی سارینا</h5>
                    <p class="mt-5 text-white">
                        {{ $footerAbout->description }}
                    </p>
                    <ul class="d-flex">
                        <li>
                            <a href="{{ $footerAbout->url_instagram }}"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="{{ $footerAbout->url_twitter }}"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="{{ $footerAbout->url_facebook }}"><i class="fab fa-facebook"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-quick-link">
                    <h5 class="text-white mt-3 mt-md-0">دسترسی سریع</h5>
                    <ul class="mt-4">
                      @foreach ($footerQuickMenus as $footerQuickMenu)
                        
                      <li><a href="{{$footerQuickMenu->link}}"><i class="fa fa-chevron-left ms-2"></i>{{$footerQuickMenu->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer">
                    <h5 class="text-white mt-3 mt-md-0">سوالی دارید؟</h5>
                    <ul class="mt-4">
                        <li><i class="fa fa-map text-primary"></i>
                            <h5 class="text-white fs-6">{{$footerContact->address}}</h5>
                        </li>
                        <li><i class="fa fa-phone text-primary"></i>
                            <h5 class="text-white fs-6">{{$footerContact->phone}}</h5>
                        </li>
                        <li><i class="fa fa-envelope text-primary"></i>
                            <h5 class="text-white fs-6">{{$footerContact->email}}</h5>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right">
        <p class="mb-0">&copy; تمامی حقوق مادی و معنوی این وب سایت متعلق به گروه ساختمانی سارینا می باشد.</p>
    </div>
</footer>
