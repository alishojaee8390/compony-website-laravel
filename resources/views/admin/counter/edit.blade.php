@extends('admin.layouts.master')

@section('title')
    <title>ویرایش بخش شمارنده</title>
@endsection


@section('main-content')
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">ویرایش بخش شمارنده</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="{{ route('counter.index') }}" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="{{ route('counter.update', $counter->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="row mt-3">
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="title" class="form-label">عنوان :</label>
                        <input type="text" class="form-control p-1 mb-2" id="title" name="title"
                            placeholder="عنوان را وارد کنید" value="{{ old('title' , $counter->title) }}">
                        @error('title')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
               
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="description" class="form-label">توضیحات :</label>
                        <input type="text" class="form-control p-1 mb-2" id="description" name="description"
                            placeholder="توضیحات را وارد کنید" value="{{ old('description' , $counter->description) }}">
                        @error('description')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 mt-3 p-2">
                        <label for="icon" class="form-label">آیکون :</label>
                        <input type="text" class="form-control p-1 mb-2" id="icon" name="icon"
                            placeholder="آیکون" value="{{ old('icon', $counter->icon) }}">
                            <p class="text-primary">آیکون خود را از سایت (fontawesome.com) انتخاب کنید</p>
                            <p class="text-primary">مثال : fa fa-users</p>
                        @error('icon')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-success mt-3 p-2 px-5">ثبت</button>

            </form>
        </div>
    </section>
@endsection
