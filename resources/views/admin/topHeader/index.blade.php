@extends('admin.layouts.master')

@section('title')
    <title>منوی بالایی سایت</title>
@endsection


@section('main-content')
   
    <section class="p-3 rounded-3 bg-white-20">

        <h5 class="text-white">منوی بالایی سایت</h5>

        <div
            class="d-flex flex-column align-items-center gap-3 justify-content-center mt-4 justify-content-sm-between flex-sm-row border-bottom p-2 rounded-3 border-primary">
            <div>
                <a href="" class="btn btn-success btn-sm p-2 disabled">ایجاد تنظیم منوی بالایی سایت</a>
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
                        <th scope="col" class="text-center">ایمیل</th>
                        <th scope="col" class="text-center">شماره تلفن</th>
                        <th scope="col" class="text-center">آدرس اینستاگرام</th>
                        <th scope="col" class="text-center">آدرس فیسبوک</th>
                        <th scope="col" class="text-center">آدرس توییتر</th>
                        <th scope="col" class="w-16-rem text-center"><i class="fa fa-cogs ms-2"></i>تنظیمات</th>
                    </tr>
                </thead>
                <tbody>
      
                    <tr>
                        <th scope="row" class="text-center">{{$topHeader->id}}</th>
                        <td class="text-center">{{$topHeader->email}}</td>
                        <td class="text-center">{{$topHeader->phone}}</td>
                        <td class="text-center">{{$topHeader->url_instagram}}</td>
                        <td class="text-center">{{$topHeader->url_facebook}}</td>
                        <td class="text-center">{{$topHeader->url_twitter}}</td>
                    
                 
                        <td class="d-flex gap-2 text-start justify-content-end w-16-rem align-items-center">
                            <div class="mb-2">
                                <a href="{{route('top-header.edit' , $topHeader->id)}}" class="btn btn-warning text-white p-2">
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
        {{-- {{$users->links()}} --}}
@endsection
