@extends('admin.layouts.master')

@section('title')
    <title>بخش فوتر - ویرایش  تماس باما</title>
@endsection


@section('main-content')
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">بخش فوتر - ویرایش  تماس باما</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="{{ route('footer-contact.index') }}" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="{{ route('footer-contact.update', $footerContact->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="row mt-3">
          
                        <div class="col-12 col-lg-6 mt-3 p-2">
                            <label for="address" class="form-label">آدرس شرکت :</label>
                            <input type="text" class="form-control p-1 mb-2" id="address" name="address"
                                placeholder="آدرس شرکت را وارد کنید" value="{{ old('address' , $footerContact->address) }}">
                            @error('address')
                                <span class="text-danger mt-3">{{ $message }}</span>
                            @enderror
                        </div>
    
                        <div class="col-12 col-lg-6 mt-3 p-2">
                            <label for="phone" class="form-label">شماره تلفن :</label>
                            <input type="text" class="form-control p-1 mb-2" id="phone" name="phone"
                            placeholder="شماره تلفن را وارد کنید" value="{{ old('phone' , $footerContact->phone) }}">
                            @error('phone')
                                <span class="text-danger mt-3">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 col-lg-6 mt-3 p-2">
                            <label for="email" class="form-label">ایمیل :</label>
                            <input type="text" class="form-control p-1 mb-2" id="email" name="email"
                            placeholder="ایمیل را وارد کنید" value="{{ old('email' , $footerContact->email) }}">
                            @error('email')
                                <span class="text-danger mt-3">{{ $message }}</span>
                            @enderror
                        </div>
                </div>
                

                <button type="submit" class="btn btn-success mt-3 p-2 px-5">ثبت</button>

            </form>
        </div>
    </section>
@endsection

