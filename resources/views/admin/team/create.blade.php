@extends('admin.layouts.master')

@section('title')
    <title>ایجاد بخش تیم</title>
@endsection


@section('main-content')
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">ایجاد بخش تیم</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="{{ route('team.index') }}" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mt-3">

                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="fullName" class="form-label">نام و نام خانوادگی :</label>
                        <input type="text" class="form-control p-1 mb-2" id="fullName" name="fullName"
                            placeholder="نام و نام خانوادگی را وارد کنید" value="{{ old('fullName') }}">
                        @error('fullName')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="job" class="form-label">رتبه سازمانی :</label>
                        <input type="text" class="form-control p-1 mb-2" id="job" name="job"
                            placeholder="رتبه سازمانی را وارد کنید" value="{{ old('job') }}">
                        @error('job')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="alt" class="form-label">آلت تصویر :</label>
                        <input type="text" class="form-control p-1 mb-2" id="alt" name="alt"
                            placeholder="آلت تصویر را وارد کنید" value="{{ old('alt') }}">
                        @error('alt')
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
                        <label for="url_instagram" class="form-label"> لینک اینستاگرام :</label>
                        <input type="text" class="form-control p-1 mb-2" id="url_instagram" name="url_instagram"
                            placeholder="لینک اینستاگرام را وارد کنید" value="{{ old('url_instagram') }}">
                        @error('url_instagram')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="url_facebook" class="form-label"> لینک فیسبوک :</label>
                        <input type="text" class="form-control p-1 mb-2" id="url_facebook" name="url_facebook"
                            placeholder="لینک فیسبوک را وارد کنید" value="{{ old('url_facebook') }}">
                        @error('url_facebook')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="url_tiwtter" class="form-label">لینک توییتر :</label>
                        <input type="text" class="form-control p-1 mb-2" id="url_tiwtter" name="url_twitter"
                            placeholder="لینک توییتر را وارد کنید" value="{{ old('url_tiwtter') }}">
                        @error('url_tiwtter')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 mt-3 p-2">
                        <label for="url_linkden" class="form-label">لینک لینکدین :</label>
                        <input type="text" class="form-control p-1 mb-2" id="url_linkden" name="url_linkden"
                            placeholder="لینک لینکدین را وارد کنید" value="{{ old('url_linkden') }}">
                        @error('url_linkden')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                   
                </div>

                <button type="submit" class="btn btn-success mt-3 p-2 px-5">ثبت</button>

            </form>
        </div>
    </section>
@endsection
