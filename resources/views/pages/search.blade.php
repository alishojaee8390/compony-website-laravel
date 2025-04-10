@extends('layouts.master')

@include('layouts.head-tag')

@section('content')
    <main class="detail-website py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main-detail">
                        <div class="row">
                            @forelse ($blogs as $blog)
                                        
                          <div class="col-md-6 mt-4">
                            <div class="blog-item shadow-sm">
                                <img src="{{asset('images/blog/' . $blog->image)}}" alt="{{$blog->alt}}" class="w-100 bg-white p-2" />
                                <h4 class="my-2">{{$blog->title }}</h4>
                                <p class="fs-6 text-muted mb-3 mt-3">{{Str::Limit(strip_tags($blog->body) ,100)}}</p>
                                <a href="{{route('blog.detail' , $blog->id)}}" class="btn btn-primary">ادامه</a>
                            </div>
                        </div>
                            @empty
                                <div class="text-center m-auto shadow-lg">
                                    <p>هیچ پستی پیدا نشد!!</</p>
                                    <a href="{{route('blog')}}">رفتن به صفحه بلاگ</a>
                                    <div>
                            @endforelse
                           
                        </div>
                        <div class="mt-5 text-center">
                            {{$blogs->links()}}
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 mt-4">
                    <aside class="sidebar p-2 bg-white shadow-sm">
                        <div class="row">
                            <div class="col-12">
                                <div class="sidebar-item-title mt-3">
                                    <h6 class="mb-4">آخرین مقالات</h6>
                                </div>
                                @foreach ($lastBlogs as $lastBlog)
                                    
                                <div class="sidebar-item pt-3">
                                    <div class="sidebar-item-text d-flex align-items-center">
                                        <img src="{{asset('images/blog/'.$lastBlog->image)}}" alt="{{$blog->alt}}">
                                        <p class="px-3"><a href="{{route('blog.detail' , $lastBlog->id)}}" class="fs-6 text-muted">{{Str::Limit(strip_tags($lastBlog->body) ,100)}}</a> </p>
                                    </div>
                                </div>
                                @endforeach
                            
                            </div>
                        </div>
                    </aside>
                    <aside class="sidebar p-2 bg-white shadow-sm mt-3">
                        <div class="row">
                            <div class="col-12">
                                <div class="sidebar-item-title mt-3">
                                    <h6 class="mb-4">دسته بندی ها</h6>
                                </div>
                                @foreach ($categories as $category)
                                    
                                <div class="sidebar-item pt-3">
                                    <div class="sidebar-item-text d-flex align-items-center">
                                        <p class="px-3"><a href="{{route('blog.detail' , $category->id)}}" class="fs-6 text-muted">{{$category->name}}</a> </p>
                                    </div>
                                </div>
                                @endforeach
                            
                            </div>
                        </div>
                    </aside>
                </div> --}}
               
            </div>
           
        </div>
    </main>
@endsection

