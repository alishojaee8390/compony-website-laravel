@extends('admin.layouts.master')

@section('title')
    <title>ایجاد بخش پروژه ها</title>
@endsection


@section('main-content')
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">ایجاد بخش پروژه ها</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="{{ route('project.index') }}" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mt-3">

                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="title" class="form-label">عنوان پروژه :</label>
                        <input type="text" class="form-control p-1 mb-2" id="title" name="title"
                            placeholder="عنوان پروژه را وارد کنید" value="{{ old('title') }}">
                        @error('title')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="description" class="form-label">درباره پروژه :</label>
                        <input type="text" class="form-control p-1 mb-2" id="description" name="description"
                            placeholder="درباره پروژه را وارد کنید" value="{{ old('description') }}">
                        @error('description')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 mt-3 p-2">
                        <label for="image" class="form-label">تصویر :</label>
                        <input type="file" class="form-control p-1 mb-2" id="image" name="image"
                           value="{{ old('image') }}">
                        @error('image')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                                 </div>

                <button type="submit" class="btn btn-success mt-3 p-2 px-5">ثبت</button>

            </form>
        </div>
    </section>
@endsection
