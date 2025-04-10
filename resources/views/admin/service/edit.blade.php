@extends('admin.layouts.master')

@section('title')
    <title>ویرایش بخش خدمات</title>
@endsection


@section('main-content')
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">ویرایش بخش خدمات</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="{{ route('service.index') }}" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="{{ route('service.update', $service->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row mt-3">
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="image" class="form-label">تصویر :</label>
                        <input type="file" class="form-control p-1 mb-2" id="image" name="image"
                           value="{{ old('image', $service->image) }}">
                        @error('image')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 col-md-6 mt-3 p-2">
                        <label for="alt" class="form-label">آلت تصویر :</label>
                        <input type="text" class="form-control p-1 mb-2" id="alt" name="alt"
                            placeholder="آلت تصویر را وارد کنید" value="{{ old('alt', $service->alt) }}">
                        @error('alt')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="service_title_1" class="form-label">عنوان خدمت 1 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="service_title_1" name="service_title_1"
                        placeholder="عنوان خدمت 1 را وارد کنید" value="{{ old('service_title_1', $service->service_title_1) }}">
                        @error('service_title_1')
                        <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="service_desc_1" class="form-label">توضیحات خدمت 1 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="service_desc_1" name="service_desc_1"
                        placeholder="توضیحات خدمت 1 را وارد کنید" value="{{ old('service_desc_1', $service->service_desc_1) }}">
                        @error('service_desc_1')
                        <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="service_title_2" class="form-label">عنوان خدمت 2 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="service_title_2" name="service_title_2"
                        placeholder="عنوان خدمت 2 را وارد کنید" value="{{ old('service_title_2', $service->service_title_2) }}">
                        @error('service_title_2')
                        <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="service_desc_2" class="form-label">توضیحات خدمت 2 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="service_desc_2" name="service_desc_2"
                        placeholder="توضیحات خدمت 2 را وارد کنید" value="{{ old('service_desc_2', $service->service_desc_2) }}">
                        @error('service_desc_2')
                        <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="service_title_3" class="form-label">عنوان خدمت 3 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="service_title_3" name="service_title_3"
                        placeholder="عنوان خدمت 3 را وارد کنید" value="{{ old('service_title_3', $service->service_title_3) }}">
                        @error('service_title_3')
                        <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="service_desc_3" class="form-label">توضیحات خدمت 3 :</label>
                        <input type="text" class="form-control p-1 mb-2" id="service_desc_3" name="service_desc_3"
                        placeholder="توضیحات خدمت 3 را وارد کنید" value="{{ old('service_desc_3', $service->service_desc_3) }}">
                        @error('service_desc_3')
                        <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                   
                </div>

                <button type="submit" class="btn btn-success mt-3 p-2 px-5">ثبت</button>

            </form>
        </div>
    </section>
@endsection
