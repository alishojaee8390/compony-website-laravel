@extends('admin.layouts.master')

@section('title')
    <title>بخش پروژه ها</title>
@endsection


@section('main-content')
    <section class="p-3 rounded-3 bg-white-20">

        <h5 class="text-white">بخش پروژه ها</h5>

        <div
            class="d-flex flex-column align-items-center gap-3 justify-content-center mt-4 justify-content-sm-between flex-sm-row border-bottom p-2 rounded-3 border-primary">
            <div>
                <a href="{{ route('project.create') }}" class="btn btn-success btn-sm p-2">ایجاد پروژه</a>
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
                        <th scope="col" class="text-center">عنوان پروژه</th>
                        <th scope="col" class="text-center">درباره پروژه</th>
                        <th scope="col" class="text-center">تصویر</th>
                        <th scope="col" class="w-16-rem text-center"><i class="fa fa-cogs ms-2"></i>تنظیمات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $key => $project)
                        <tr>
                            <th scope="row" class="text-center">{{ $key + 1 }}</th>
                            <td class="text-center">{{ $project->title }}</td>
                            <td class="text-center">{{ $project->description }}</td>
                            <td class="text-center img-fluid"><img src="{{asset('images/project/'.$project->image)}}" style="width: 45px; height: 45px;" alt="{{$project->title}}"></td>
                            <td class="d-flex gap-2 text-start justify-content-end w-16-rem align-items-center">
                                <div class="mb-2">
                                    <a href="{{ route('project.edit', $project->id) }}"
                                        class="btn btn-warning text-white p-2">
                                        <i class="fa fa-edit ms-2"></i>
                                        ویرایش
                                    </a>
                                </div>
                                <form action="{{ route('project.destroy', $project->id) }}" class="mb-2" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger delete p-2" type="submit"><i
                                            class="fa fa-trash ms-2"></i>حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </section>
@endsection
@section('script')
    @include('admin.alerts.sweetalert.delete-confirm', ['className' => 'delete'])
@endsection
