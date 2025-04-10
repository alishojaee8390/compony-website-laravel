@extends('admin.layouts.master')
   


   @section('main-content')

      <div class="main-content rounded-3">
        <div class="main-content-item">
            <div class="old-project">
                <h3>آخرین بلاگ ها</h3>
                <section class="table-responsive mt-5">
                  <table class="admin-table table table-hover">
                      <thead>
                          <tr>
                              <th scope="col" class="text-center">#</th>
                              <th scope="col" class="text-center">عنوان</th>
                              <th scope="col" class="text-center">متن</th>
                              <th scope="col" class="text-center">عکس</th>
                              <th scope="col" class="w-16-rem text-center"><i class="fa fa-cogs ms-2"></i>تنظیمات</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($blogs as $key => $blog)
                          <tr>
                              <th scope="row" class="text-center">{{$key + 1}}</th>
                              <td class="text-center">{{$blog->subject}}</td>
                              <td class="text-center">{{Str::Limit(strip_tags($blog->body , 30))}}</td>
                              <td class="text-center img-fluid"><img src="{{asset('images/blog/'.$blog->image)}}" style="width: 45px; height: 45px;" alt="{{$blog->title}}"></td>
                              <td class="d-flex gap-2 text-start justify-content-end w-16-rem align-items-center">
                                <div class="mb-2">
                                    <a href="{{ route('blog.detail', $blog->id) }}"
                                        class="btn btn-info text-white p-2" target="_blank">
                                        <i class="fa fa-eye ms-2"></i>
                                        نمایش
                                    </a>
                                </div>
                              </td>
                            </tr>
                          @endforeach
      
                      </tbody>
                  </table>
              </section>
            </div>
        </div>
      </div>
   
@endsection
