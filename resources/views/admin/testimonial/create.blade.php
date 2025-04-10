@extends('admin.layouts.master')

@section('title')
    <title>ایجاد بخش نظرات مشتریان</title>
@endsection


@section('main-content')
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">ایجاد بخش نظرات مشتریان</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="{{ route('testimonial.index') }}" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="{{ route('testimonial.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mt-3">

                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="fullName" class="form-label">نام مشتری :</label>
                        <input type="text" class="form-control p-1 mb-2" id="fullName" name="fullName"
                            placeholder="نام مشتری را وارد کنید" value="{{ old('fullName') }}">
                        @error('fullName')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="job" class="form-label">شغل :</label>
                        <input type="text" class="form-control p-1 mb-2" id="job" name="job"
                            placeholder="شغل  را وارد کنید" value="{{ old('job') }}">
                        @error('job')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="description" class="form-label">نظر مشتری :</label>
                        <input type="text" class="form-control p-1 mb-2" id="description" name="description"
                            placeholder="نظر مشتری  را وارد کنید" value="{{ old('description') }}">
                        @error('description')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="image" class="form-label">تصویر :</label>
                        <input type="file" class="form-control p-1 mb-2" id="image" name="image"
                            value="{{ old('image') }}">
                        @error('image')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 mt-3 p-2">
                        <label for="alt" class="form-label">آلت عکس :</label>
                        <input type="text" class="form-control p-1 mb-2" id="alt" name="alt"
                            placeholder="آلت عکس  را وارد کنید" value="{{ old('alt') }}">
                        @error('alt')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-success mt-3 p-2 px-5">ثبت</button>

            </form>
        </div>
    </section>
@endsection
