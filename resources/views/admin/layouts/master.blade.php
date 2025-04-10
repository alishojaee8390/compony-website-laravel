<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head-tag')
    @yield('title')
</head>

<body>
    @include('admin.layouts.sidebar')
    <div id="main">
        <div class="head">
            <div class="col-lg-6 d-flex align-items-center gap-2">
                <span class="nav fs-4 text-white">
                    <i class="fas fa-bars"></i>
                </span>
                <span class="btn-nav fs-4 text-white d-none">
                    <i class="fas fa-bars"></i>
                </span>
                <span class="nav-2 fs-4 text-white">داشبورد</span>
            </div>
            <div class="col-lg-6">
                <div class="prof-admin d-flex justify-content-end">
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="fs-6 ms-4 text-danger btn"><i class="fa fa-sign-out-alt ms-1"></i>خروج</button>

                    </form>
                    <div class="profile text-start text-white">
                        <p>سلام {{ auth()->user()->first_name . ' ' . auth()->user()->last_name }} خوش اومدی ,</p>
                        <span class="d-block text-muted">شما {{ auth()->user()->userType() }} هستید.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="informaition my-4">
            <div class="row">
                <div class="col-lg-3 ps-2">
                    <div class="box rounded-3">
                        <div class="box-icon"><i class="fa fa-clipboard"></i></div>
                        <div class="box-text">
                            <h4>{{$setting['blog']}}</h4>
                            <h4 class="text-muted fs-5 mt-4">پست ها</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ps-2 mt-3 mt-lg-0">
                    <div class="box rounded-3">
                        <div class="box-icon"><i class="fa fa-comments"></i></div>
                        <div class="box-text">
                            <h4>{{$setting['user']}}</h4>
                            <h4 class="text-muted fs-5 mt-4">کامنت ها</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ps-2 mt-3 mt-lg-0">
                    <div class="box rounded-3">
                        <div class="box-icon"><i class="fa fa-users"></i></div>
                        <div class="box-text">
                            <h4>{{$setting['user']}}</h4>
                            <h4 class="text-muted fs-5 mt-4">کاربران</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ps-2 mt-3 mt-lg-0">
                    <div class="box rounded-3">
                        <div class="box-icon"><i class="fa fa-images"></i></div>
                        <div class="box-text">
                            <h4>{{$setting['project']}}</h4>
                            <h4 class="text-muted fs-5 mt-4">پروژه ها</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('main-content')
    </div>
    @include('admin.layouts.script')
    @yield('script')
    @include('admin.alerts.sweetalert.success')
    @include('admin.alerts.sweetalert.error')
    
</body>

</html>
