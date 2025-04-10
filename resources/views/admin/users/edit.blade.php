@extends('admin.layouts.master')

@section('title')
    <title>ویرایش کابر ادمین</title>
@endsection


@section('main-content')
       <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">ویرایش کابر ادمین</h5>
        <div
            class="mt-4 border-bottom p-2 rounded-3 border-primary">
                <a href="{{ route('users.index') }}" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
            </div>
        <div>
            <form action="{{ route('users.update' , $user->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="row mt-3">
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="first_name" class="form-label">نام :</label>
                        <input type="text" class="form-control p-1 mb-2" id="first_name" name="first_name" placeholder="نام را وارد کنید" value="{{old('first_name' , $user->first_name)}}">
                        @error('first_name')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="last_name" class="form-label">نام خانوادگی :</label>
                        <input type="text" class="form-control p-1 mb-2" id="last_name" name="last_name" placeholder="نام خانوادگی را وارد کنید" value="{{old('last_name',$user->last_name)}}">
                        @error('last_name')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="email" class="form-label">ایمیل :</label>
                        <input type="text" class="form-control p-1 mb-2" disabled id="email" placeholder="ایمیل را وارد کنید" value="{{old('email',$user->email)}}">
                        @error('email')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="mobile" class="form-label">موبایل :</label>
                        <input type="text" class="form-control p-1 mb-2" id="mobile" name="mobile" placeholder="موبایل را وارد کنید" value="{{old('mobile',$user->mobile)}}">
                        @error('mobile')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    {{-- @if (auth()->user()->id !== $user->id) --}}
                    <div class="col-12 mt-3 p-2">
                        <label for="user_type" class="form-label">نقش :</label>
                        <select name="user_type" class="form-control p-1" id="user_type">
                            <option value="0" @if ($user->user_type === 0) selected
                                
                            @endif>نویسنده</option>
                            <option value="1" @if ($user->user_type === 1) selected
                                
                            @endif>مدیر کل</option>
                        </select>
                        @error('user_type')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- @endif --}}
                    
                </div>

                <button type="submit" class="btn btn-success mt-3 p-2 px-5">ثبت</button>

            </form>
        </div>
    </section>
@endsection
