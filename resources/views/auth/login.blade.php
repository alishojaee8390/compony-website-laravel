@section('head-tag')
    <title>ورود به پنل ادمین</title>
@endsection

@section('content')
    <div class="auth my-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="title-login text-center mb-5 bg-primary p-3 rounded-3 text-white">
                        ورود به پنل ادمین
                    </div>
                    <div class="form shadow-sm mt-3 bg-white p-5 rounded-3">
                        <form action="{{ route('login.store') }}" method="post">
                            @csrf
                            <div class="input-group">
                                <label for="">ایمیل یا موبایل:</label>
                                <input type="text" class="form-control py-2  w-100 mt-3"
                                    placeholder="ایمیل یا شماره موبایل خود را وارد کنید" name="email">

                                @error('email')
                                    <span class="text-danger ">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-group mt-3">
                                <label for="">رمز عبور:</label>
                                <input type="password" class="form-control py-2  w-100 mt-3"
                                    placeholder="رمز عبور خود را وارد کنید" name="password">
                                
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-group mt-3">
                                <input type="checkbox" name="remember" id="remember">   
                                <label for="remember">من را  بخاطر بسپار</label>
                            </div>
                            <div class="text-center m-auto mt-3">

                                <button class="btn btn-primary w-50" type="submit">ورود</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@include('layouts.master')
