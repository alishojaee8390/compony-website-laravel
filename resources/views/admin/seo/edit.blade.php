@extends('admin.layouts.master')

@section('title')
    <title>ویرایش تنظیمات سئو سایت</title>
@endsection


@section('main-content')
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">ویرایش تنظیمات سئو سایت</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="{{ route('seo.index') }}" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="{{ route('seo.update', $seo->id) }}" method="post" id="form">
                @method('PUT')
                @csrf
                <div class="row mt-3">

                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="title" class="form-label">عنوان :</label>
                        <input type="text" class="form-control p-1 mb-2" id="title" name="title"
                            placeholder="عنوان را وارد کنید" value="{{ old('title', $seo->title) }}">
                        @error('title')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="keywords" class="form-label">کلمه کلیدی :</label>
                        
                        <input type="hidden" class="form-control p-1 mb-2" id="keywords" name="keywords"
                            value="{{ old('keywords', $seo->keywords) }}">
                        <select class="select2 form-control p-1 mb-2" id="select_keywords" multiple></select>
                        @error('keywords')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="site_url" class="form-label">لینک سایت :</label>
                        <input type="text" class="form-control p-1 mb-2" id="site_url" name="site_url"
                            placeholder="لینک سایت را وارد کنید" value="{{ old('site_url', $seo->site_url) }}">
                        @error('site_url')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="site_name" class="form-label">اسم سایت :</label>
                        <input type="text" class="form-control p-1 mb-2" id="site_name" name="site_name"
                            placeholder="اسم سایت را وارد کنید" value="{{ old('site_name', $seo->site_name) }}">
                        @error('site_name')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-12 mt-3 p-2">
                        <label for="twitter_title" class="form-label">عنوان تویتتر :</label>
                        <input type="text" class="form-control p-1 mb-2" id="twitter_title" name="twitter_title"
                            placeholder="عنوان تویتتر را وارد کنید" value="{{ old('twitter_title', $seo->twitter_title) }}">
                        @error('twitter_title')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 mt-3 p-2">
                        <label for="twitter_title" class="form-label">توضیحات سایت :</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control p-2 mt-2" placeholder="توضیحات سایت را وارد کنید">{{old('twitter_description' , $seo->description)}}</textarea>
                        @error('description')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 mt-3 p-2">
                        <label for="twitter_description" class="form-label">درباره تویتتر :</label>
                        <textarea name="twitter_description" id="twitter_description" cols="30" rows="10" class="form-control p-2 mt-2" placeholder="توضیحات درباره توییتر  را وارد کنید">{{old('twitter_description' , $seo->twitter_description)}}</textarea>
                        @error('twitter_description')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>


                </div>

                <button type="submit" class="btn btn-success mt-3 p-2 px-5">ثبت</button>

            </form>
        </div>
    </section>
@endsection


@section('script')
    <script>
        $(document).ready(function() {
            let keywords_input = $('#keywords');
            let select_keywords = $('#select_keywords')
            let defualt_keywords = keywords_input.val();
            let defualt_data = null;

            if (keywords_input.val() !== null && keywords_input.val().length > 0) {
                defualt_data = defualt_keywords.split(',');
            }
            select_keywords.select2({
                placeholder: "تگ ها را وارد کنید ",
                tags: true,
                data: defualt_data
            });
            select_keywords.children('option').attr('selected', true).trigger('change');
            $('#form').submit(function(e) {
                if (select_keywords.val() !== null && select_keywords.val().length > 0) {
                    let selectedSource = select_keywords.val().join(',');
                    keywords_input.val(selectedSource);
                }
            })
        })
    </script>
@endsection
