@extends('admin.layouts.master')

@section('title')
    <title>ادمین ها</title>
@endsection


@section('main-content')
   
    <section class="p-3 rounded-3 bg-white-20">

        <h5 class="text-white">ادمین ها</h5>

        <div
            class="d-flex flex-column align-items-center gap-3 justify-content-center mt-4 justify-content-sm-between flex-sm-row border-bottom p-2 rounded-3 border-primary">
            <div>
                <a href="{{route('users.create')}}" class="btn btn-success btn-sm p-2">ایجاد ادمین جدید</a>
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
                        <th scope="col" class="text-center">نام</th>
                        <th scope="col" class="text-center">نام خانوادگی</th>
                        <th scope="col" class="text-center">ایمیل</th>
                        <th scope="col" class="text-center">شماره موبایل</th>
                        <th scope="col" class="text-center">نقش</th>
                        <th scope="col" class="text-center">وضعیت</th>
                        <th scope="col" class="w-16-rem text-center"><i class="fa fa-cogs ms-2"></i>تنظیمات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                    <tr>
                        <th scope="row" class="text-center">{{$key + 1}}</th>
                        <td class="text-center">{{$user->first_name}}</td>
                        <td class="text-center">{{$user->last_name}}</td>
                        <td class="text-center">{{$user->email}}</td>
                        <td class="text-center">{{$user->mobile}}</td>
                        <td class="text-center">{{$user->userType()}}</td>
                    
                 
                      <td class="text-center">
                        <div class="form-check form-switch d-flex justify-content-center align-items-center">
                            <input class="form-check-input" type="checkbox" role="switch"
                                data-url="{{route('users.status' , $user->id)}}"
                                id="{{ $user->id }}" onchange="changeStatus({{ $user->id }})"
                                @if ($user->status === 1) checked @endif>
                        </div>
                    </td>
                        <td class="d-flex gap-2 text-start justify-content-end w-16-rem align-items-center">
                            <div class="mb-2">
                                <a href="{{route('users.edit' , $user->id)}}" class="btn btn-warning text-white p-2">
                                    <i class="fa fa-edit ms-2"></i>
                                    ویرایش
                                </a>
                            </div>
                            
                            {{-- @if (auth()->user()->id !== $user->id && $user->user_type !== 1)  --}}
                     
                            <form action="{{route('users.destroy' , $user->id)}}" class="mb-2" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger delete p-2" type="submit"  ><i class="fa fa-trash ms-2"></i>حذف</button>
                            </form>
                            {{-- @endif --}}
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </section>

    </section>
        {{$users->links()}}
@endsection

@section('script')
    <script type="text/javascript">

    function changeStatus(id) {
            let element = $('#' + id);
            let url = element.attr('data-url');
            let elementValue = !element.prop('checked');

            $.ajax({
                url,
                type: 'GET',
                success: function(response) {
                    if (response.status) {
                        if (response.checked) {
                            element.prop('checked', true);
                            successMessage('کابر با موفقیت فعال شد')
                        } else {
                            element.prop('checked', false);
                            successMessage('کابر با موفقیت غیرفعال شد')
                        }
                    } else {
                        element.prop('checked', elementValue);
                        errorMessage('هنگام ویرایش مشکلی پیش آمده است')
                    }
                },
                error : function(response){
                        console.log(response)
                    element.prop('checked', elementValue);
                            errorMessage('ارتباط برقرار نشد')
                }
            })

        }
        function successMessage(message) {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: message,
                showConfirmButton: false,
                timer: 1500
            });
        }

        function errorMessage(message) {
            Swal.fire({
                position: "top-end",
                icon: "error",
                title: message,
                showConfirmButton: false,
                timer: 1500
            });
        }
    </script>


@include('admin.alerts.sweetalert.delete-confirm' , ['className' => 'delete'])

@endsection