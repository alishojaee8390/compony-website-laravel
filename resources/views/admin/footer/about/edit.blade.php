@extends('admin.layouts.master')

@section('title')
    <title>بخش فوتر - ویرایش درباره شرکت</title>
@endsection


@section('main-content')
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">بخش فوتر - ویرایش درباره شرکت</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="{{ route('footer-about.index') }}" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="{{ route('footer-about.update', $footerAbout->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="row mt-3">
          
                        <div class="col-12 col-lg-6 mt-3 p-2">
                            <label for="description" class="form-label">درباره شرکت :</label>
                            <input type="text" class="form-control p-1 mb-2" id="description" name="description"
                                placeholder="درباره شرکت را وارد کنید" value="{{ old('description' , $footerAbout->description) }}">
                            @error('description')
                                <span class="text-danger mt-3">{{ $message }}</span>
                            @enderror
                        </div>
    
                        <div class="col-12 col-lg-6 mt-3 p-2">
                            <label for="url_instagram" class="form-label">لینک اینستاگرام :</label>
                            <input type="text" class="form-control p-1 mb-2" id="url_instagram" name="url_instagram"
                            placeholder="لینک اینستاگرام را وارد کنید" value="{{ old('url_instagram' , $footerAbout->url_instagram) }}">
                            @error('url_instagram')
                                <span class="text-danger mt-3">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 col-lg-6 mt-3 p-2">
                            <label for="url_twitter" class="form-label">لینک توییتر :</label>
                            <input type="text" class="form-control p-1 mb-2" id="url_twitter" name="url_twitter"
                            placeholder="لینک توییتر را وارد کنید" value="{{ old('url_twitter' , $footerAbout->url_twitter) }}">
                            @error('url_twitter')
                                <span class="text-danger mt-3">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 col-lg-6 mt-3 p-2">
                            <label for="url_facebook" class="form-label">لینک فیسبوک :</label>
                            <input type="text" class="form-control p-1 mb-2" id="url_facebook" name="url_facebook"
                            placeholder="لینک فیسبوک را وارد کنید" value="{{ old('url_facebook' , $footerAbout->url_facebook) }}">
                            @error('url_facebook')
                                <span class="text-danger mt-3">{{ $message }}</span>
                            @enderror
                        </div>
    
                </div>
                

                <button type="submit" class="btn btn-success mt-3 p-2 px-5">ثبت</button>

            </form>
        </div>
    </section>
@endsection

