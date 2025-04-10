@extends('admin.layouts.master')

@section('title')
    <title>ایجاد ادمین</title>
@endsection


@section('main-content')
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">ایجاد ادمین</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="{{ route('users.index') }}" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="{{ route('users.store') }}" method="post">
                @csrf
                <div class="row mt-3">
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="first_name" class="form-label">نام :</label>
                        <input type="text" class="form-control p-1 mb-2" id="first_name" name="first_name"
                            placeholder="نام را وارد کنید" value="{{ old('first_name') }}">
                        @error('first_name')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="last_name" class="form-label">نام خانوادگی :</label>
                        <input type="text" class="form-control p-1 mb-2" id="last_name" name="last_name"
                            placeholder="نام خانوادگی را وارد کنید" value="{{ old('last_name') }}">
                        @error('last_name')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="email" class="form-label">ایمیل :</label>
                        <input type="text" class="form-control p-1 mb-2" id="email"
                            placeholder="ایمیل را وارد کنید" name="email" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="mobile" class="form-label">موبایل :</label>
                        <input type="text" class="form-control p-1 mb-2" id="mobile" name="mobile"
                            placeholder="موبایل را وارد کنید" value="{{ old('mobile') }}">
                        @error('mobile')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="password" class="form-label">پسورد :</label>
                        <input type="password" class="form-control p-1 mb-2" id="password" name="password"
                            placeholder="پسورد را وارد کنید" value="{{ old('password') }}">
                        @error('password')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="password_confirmation" class="form-label">تکرار پسورد :</label>
                        <input type="password" class="form-control p-1 mb-2" id="password_confirmation" name="password_confirmation"
                            placeholder="تکرار پسورد را وارد کنید" value="{{ old('password_confirmation') }}">
                        @error('password_confirmation')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="user_type" class="form-label">نقش :</label>
                        <select name="user_type" class="form-control p-1" id="user_type">
                            <option value="0"selected>نویسنده</option>
                            <option value="1">مدیر کل</option>
                        </select>
                        @error('user_type')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="status" class="form-label">وضعیت :</label>
                        <select name="status" class="form-control p-1" id="status">
                            <option value="1" @if (old('status') === 1) selected @endif>فعال</option>
                            <option value="0" @if (old('status') === 0) selected @endif>غیرفعال</option>
                        </select>
                        @error('status')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>


                </div>

                <button type="submit" class="btn btn-success mt-3 p-2 px-5">ثبت</button>

            </form>
        </div>
    </section>
@endsection
