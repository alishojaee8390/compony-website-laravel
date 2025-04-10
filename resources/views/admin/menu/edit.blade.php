@extends('admin.layouts.master')

@section('title')
    <title>بخش منو - ویرایش منو</title>
@endsection


@section('main-content')
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">بخش منو - ویرایش منو</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="{{ route('menu.index') }}" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="{{ route('menu.update', $menu->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="row mt-3">

                    <div class="col-12 mt-3 p-2">
                        <label for="title" class="form-label">عنوان :</label>
                        <input type="text" class="form-control p-1 mb-2" id="title" name="title"
                            placeholder="عنوان را وارد کنید" value="{{ old('title', $menu->title) }}">
                        @error('title')
                            <span class="text-danger mt-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12 mt-3 p-2">
                        <label for="link" class="form-label">لینک :</label>
                        <input type="text" class="form-control p-1 mb-2" id="link" name="link"
                            placeholder="لینک را وارد کنید" value="{{ old('link', $menu->link) }}">
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
