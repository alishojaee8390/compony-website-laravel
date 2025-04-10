@extends('admin.layouts.master')

@section('title')
    <title>ویرایش بخش بلاگ ها</title>
@endsection


@section('main-content')
    <section class="p-3 rounded-3 bg-white-20">
        <h5 class="text-white">ویرایش بخش بلاگ ها</h5>
        <div class="mt-4 border-bottom p-2 rounded-3 border-primary">
            <a href="{{ route('faq.index') }}" class="btn btn-danger btn-sm p-2 px-3">بازگشت</a>
        </div>
        <div>
            <form action="{{ route('faq.update', $faq->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="row mt-3">
          
                        <div class="col-12 mt-3 p-2">
                            <label for="question" class="form-label">سوال :</label>
                            <input type="text" class="form-control p-1 mb-2" id="question" name="question"
                                placeholder="سوال را وارد کنید" value="{{ old('question' , $faq->question) }}">
                            @error('question')
                                <span class="text-danger mt-3">{{ $message }}</span>
                            @enderror
                        </div>
    
    
                        <div class="col-12 mt-3 p-2">
                            <label for="answer" class="form-label">جواب :</label>
                            <textarea name="answer" id="answer" cols="30" rows="10" class="form-control p-2" placeholder="جواب خود را وارد کنید">{{ old('answer' , $faq->answer) }}</textarea>
                            @error('answer')
                                <span class="text-danger mt-3">{{ $message }}</span>
                            @enderror
                        </div>
    
                </div>
                

                <button type="submit" class="btn btn-success mt-3 p-2 px-5">ثبت</button>

            </form>
        </div>
    </section>
@endsection

