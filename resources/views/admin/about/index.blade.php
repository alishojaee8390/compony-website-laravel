@extends('admin.layouts.master')

@section('title')
    <title>بخش درباره ما</title>
@endsection


@section('main-content')
   
    <section class="p-3 rounded-3 bg-white-20">

        <h5 class="text-white">بخش درباره ما</h5>

        <div
            class="d-flex flex-column align-items-center gap-3 justify-content-center mt-4 justify-content-sm-between flex-sm-row border-bottom p-2 rounded-3 border-primary">
            <div>
                <a href="" class="btn btn-success btn-sm p-2 disabled">ایجاد بخش درباره ما</a>
            </div>
            <div>

                <form action="" method="post">
                    <input type="text" placeholder="جستجو ..." class="form-control w-16-rem p-2">
                </form>
            </div>

        </div>
        <section class="table-responsive mt-5">
            <table class="admin-table table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">عنوان خدمات</th>
                        <th scope="col" class="text-center">زیر عنوان خدمات</th>
                        <th scope="col" class="text-center">درباره عنوان</th>
                        <th scope="col" class="text-center">درباره شرکت</th>
                        <th scope="col" class="text-center">عکس</th>
                        <th scope="col" class="w-16-rem text-center"><i class="fa fa-cogs ms-2"></i>تنظیمات</th>
                    </tr>
                </thead>
                <tbody>
      
                    <tr>
                        <th scope="row" class="text-center">{{$about->id}}</th>
                        <td class="text-center">{{$about->title}}</td>
                        <td class="text-center">{{$about->subtitle}}</td>
                        <td class="text-center">{{$about->helper}}</td>
                        <td class="text-center">{{Str::limit($about->description , 30)}}</td>
                        <td class="text-center img-fluid"><img src="{{asset('images/about/'.$about->image)}}" style="width: 45px; height: 45px;" alt="{{$about->alt}}"></td>
                    
                 
                        <td class="d-flex gap-2 text-start justify-content-end w-16-rem align-items-center">
                            <div class="mb-2">
                                <a href="{{route('about.edit' , $about->id)}}" class="btn btn-warning text-white p-2">
                                    <i class="fa fa-edit ms-2"></i>
                                    ویرایش
                                </a>
                            </div>
                        </td>
                    </tr>
                  

                </tbody>
            </table>
        </section>

    </section>
@endsection