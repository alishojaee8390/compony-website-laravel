@extends('admin.layouts.master')

@section('title')
    <title>ویرایش بخش مقدمه</title>
@endsection


@section('main-content')
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">ویرایش بخش مقدمه</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="{{ route('intro.index') }}" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="{{ route('intro.update', $intro->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row mt-3">
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="image" class="form-label">تصویر :</label>
                        <input type="file" class="form-control p-1 mb-2" id="image" name="image"
                           value="{{ old('image', $intro->image) }}">
                        @error('image')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="title" class="form-label">عنوان :</label>
                        <input type="text" class="form-control p-1 mb-2" id="title" name="title"
                            placeholder="عنوان" value="{{ old('title', $intro->title) }}">
                        @error('title')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 mt-3 p-2">
                        <label for="link" class="form-label">لینک :</label>
                        <input type="text" class="form-control p-1 mb-2" id="link" name="link"
                        placeholder="لینک" value="{{ old('link', $intro->link) }}">
                        @error('link')
                        <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 mt-3 p-2">
                        <label for="description" class="form-label">توضیحات :</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control p-2 mt-2" placeholder="توضیحات سایت را وارد کنید">{{old('description' , $intro->description)}}</textarea>
                        @error('description')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-success mt-3 p-2 px-5">ثبت</button>

            </form>
        </div>
    </section>
@endsection
