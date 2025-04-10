@extends('admin.layouts.master')

@section('title')
    <title>ایجاد بخش بلاگ ها</title>
@endsection


@section('main-content')
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">ایجاد پست</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="{{ route('blog.index') }}" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data" id="form">
                @csrf
                <div class="row mt-3">

                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="subject" class="form-label">عنوان بلاگ :</label>
                        <input type="text" class="form-control p-1 mb-2" id="subject" name="subject"
                            placeholder="عنوان بلاگ را وارد کنید" value="{{ old('subject') }}">
                        @error('subject')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="category_id" class="form-label">دسته بندی :</label>
                        <select name="category_id" id="category_id" class="form-control p-1 mb-2">
                        @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        @error('category_id')
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
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="alt" class="form-label">آلت بلاگ :</label>
                        <input type="text" class="form-control p-1 mb-2" id="alt" name="alt"
                            placeholder="آلت بلاگ را وارد کنید" value="{{ old('alt') }}">
                        @error('alt')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 mt-3 p-2">
                        <label for="body" class="form-label">توضیحات بلاگ :</label>
                        <textarea name="body" id="body" cols="30" rows="30">{{old('body')}}</textarea>
                        @error('body')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <h5 class="text-white my-3">بخش سئو بلاگ</h5>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="title" class="form-label">عنوان صفحه :</label>
                        <input type="text" class="form-control p-1 mb-2" id="title" name="title"
                            placeholder="عنوان صفحه را وارد کنید" value="{{ old('title') }}">
                        @error('title')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="description" class="form-label">درباره صفحه :</label>
                        <input type="text" class="form-control p-1 mb-2" id="description" name="description"
                            placeholder="درباره صفحه را وارد کنید" value="{{ old('description') }}">
                        @error('description')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="keywords" class="form-label">کلمه کلیدی :</label>
                        
                        <input type="hidden" class="form-control p-1 mb-2" id="keywords" name="keywords"
                            value="{{ old('keywords') }}">
                        <select class="select2 form-control p-1 mb-2" id="select_keywords" multiple></select>
                        @error('keywords')
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
        CKEDITOR.replace('body')
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
