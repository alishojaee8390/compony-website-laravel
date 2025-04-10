@extends('admin.layouts.master')

@section('title')
    <title>بخش فوتر - ویرایش تماس باما</title>
@endsection


@section('main-content')
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">بخش فوتر - ویرایش تماس باما</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="{{ route('footer-quick-menu.index') }}" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="{{ route('footer-quick-menu.update', $footerQuickMenu->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="row mt-3">

                    <div class="col-12 mt-3 p-2">
                        <label for="title" class="form-label">عنوان :</label>
                        <input type="text" class="form-control p-1 mb-2" id="title" name="title"
                            placeholder="عنوان را وارد کنید" value="{{ old('title', $footerQuickMenu->title) }}">
                        @error('title')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 mt-3 p-2">
                        <label for="link" class="form-label">لینک :</label>
                        <input type="text" class="form-control p-1 mb-2" id="link" name="link"
                            placeholder="لینک را وارد کنید" value="{{ old('link', $footerQuickMenu->link) }}">
                        @error('link')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-success mt-3 p-2 px-5">ثبت</button>

            </form>
        </div>
    </section>
@endsection
