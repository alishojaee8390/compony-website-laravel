@extends('admin.layouts.master')

@section('title')
    <title>ویرایش بخش درباره ما</title>
@endsection


@section('main-content')
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">ویرایش بخش درباره ما</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="{{ route('about.index') }}" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="{{ route('about.update', $about->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row mt-3">

                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="title" class="form-label">عنوان خدمات :</label>
                        <input type="text" class="form-control p-1 mb-2" id="title" name="title"
                            placeholder="عنوان خدمات را وارد کنید" value="{{ old('title', $about->title) }}">
                        @error('title')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
               
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="subtitle" class="form-label">زیر عنوان خدمات :</label>
                        <input type="text" class="form-control p-1 mb-2" id="subtitle" name="subtitle"
                            placeholder="زیر عنوان خدمات را وارد کنید" value="{{ old('subtitle', $about->subtitle) }}">
                        @error('subtitle')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="helper" class="form-label">درباره عنوان :</label>
                        <input type="text" class="form-control p-1 mb-2" id="helper" name="helper"
                            placeholder="درباره عنوان را وارد کنید" value="{{ old('helper', $about->helper) }}">
                        @error('helper')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="image" class="form-label">تصویر :</label>
                        <input type="file" class="form-control p-1 mb-2" id="image" name="image"
                           value="{{ old('image', $about->image) }}">
                        @error('image')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="col-12 mt-3 p-2">
                        <label for="alt" class="form-label">آلت تصویر :</label>
                        <input type="text" class="form-control p-1 mb-2" id="alt" name="alt"
                            placeholder="آلت تصویر" value="{{ old('alt', $about->alt) }}">
                        @error('alt')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                   
                    <div class="col-12 mt-3 p-2">
                        <label for="description" class="form-label">درباره شرکت :</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control p-2 mt-2 mb-2" placeholder="توضیحات سایت را وارد کنید">{{old('description' , $about->description)}}</textarea>
                        @error('description')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <h3 class="text-white p-2 m-2">تنظیم خدمات</h3>
                    <div class="col-12 col-md-3 mt-3 p-2">
                        <label for="serivce_title_1" class="form-label">عنوان خدمت 1 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="serivce_title_1" name="serivce_title_1"
                            placeholder="عنوان خدمت 1" value="{{ old('serivce_title_1', $about->serivce_title_1) }}">
                        @error('serivce_title_1')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-3 mt-3 p-2">
                        <label for="serivce_desc_1" class="form-label">توضیحات خدمت 1 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="serivce_desc_1" name="serivce_desc_1"
                            placeholder="توضیحات خدمت 1" value="{{ old('serivce_desc_1', $about->serivce_desc_1) }}">
                        @error('serivce_desc_1')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-3 mt-3 p-2">
                        <label for="serivce_title_2" class="form-label">عنوان خدمت 2 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="serivce_title_2" name="serivce_title_2"
                            placeholder="عنوان خدمت 2" value="{{ old('serivce_title_2', $about->serivce_title_2) }}">
                        @error('serivce_title_2')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-3 mt-3 p-2">
                        <label for="serivce_desc_2" class="form-label">توضیحات خدمت 2 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="serivce_desc_2" name="serivce_desc_2"
                            placeholder="توضیحات خدمت 2" value="{{ old('serivce_desc_2', $about->serivce_desc_2) }}">
                        @error('serivce_desc_2')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-3 mt-3 p-2">
                        <label for="serivce_title_3" class="form-label">عنوان خدمت 3 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="serivce_title_3" name="serivce_title_3"
                            placeholder="عنوان خدمت 3" value="{{ old('serivce_title_3', $about->serivce_title_3) }}">
                        @error('serivce_title_3')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-3 mt-3 p-2">
                        <label for="serivce_desc_3" class="form-label">توضیحات خدمت 3 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="serivce_desc_3" name="serivce_desc_3"
                            placeholder="توضیحات خدمت 3" value="{{ old('serivce_desc_3', $about->serivce_desc_3) }}">
                        @error('serivce_desc_3')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-3 mt-3 p-2">
                        <label for="serivce_title_4" class="form-label">عنوان خدمت 4 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="serivce_title_4" name="serivce_title_4"
                            placeholder="عنوان خدمت 4" value="{{ old('serivce_title_4', $about->serivce_title_4) }}">
                        @error('serivce_title_4')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-3 mt-3 p-2">
                        <label for="serivce_desc_4" class="form-label">توضیحات خدمت 4 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="serivce_desc_4" name="serivce_desc_4"
                            placeholder="توضیحات خدمت 4" value="{{ old('serivce_desc_4', $about->serivce_desc_4) }}">
                        @error('serivce_desc_4')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-success mt-3 p-2 px-5">ثبت</button>

            </form>
        </div>
    </section>
@endsection
