@extends('admin.layouts.master')

@section('title')
    <title>ویرایش بخش خانه</title>
@endsection


@section('main-content')
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">ویرایش بخش خانه</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="{{ route('hero.index') }}" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="{{ route('hero.update', $hero->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row mt-3">

                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="established" class="form-label">سال تاسیس :</label>
                        <input type="text" class="form-control p-1 mb-2" id="established" name="established"
                            placeholder="سال تاسیس را وارد کنید" value="{{ old('established', $hero->established) }}">
                        @error('established')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
               
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="contact" class="form-label">لینک دکمه تماس باما :</label>
                        <input type="text" class="form-control p-1 mb-2" id="contact" name="contact"
                            placeholder="لینک دکمه تماس باما را وارد کنید" value="{{ old('contact', $hero->contact) }}">
                        @error('contact')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="question" class="form-label">لینک دکمه سوالات متدوال :</label>
                        <input type="text" class="form-control p-1 mb-2" id="question" name="question"
                            placeholder="لینک دکمه سوالات متدوال را وارد کنید" value="{{ old('question', $hero->question) }}">
                        @error('question')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="image" class="form-label">تصویر :</label>
                        <input type="file" class="form-control p-1 mb-2" id="image" name="image"
                           value="{{ old('image', $hero->image) }}">
                        @error('image')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 mt-3 p-2">
                        <label for="description" class="form-label">درباره شرکت :</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control p-2 mt-2" placeholder="توضیحات سایت را وارد کنید">{{old('description' , $hero->description)}}</textarea>
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
