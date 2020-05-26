@extends('admin.layouts.master') @section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <form action="{{route("PostEditUser",$user -> id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1 class="h3 mb-2 text-gray-800">Danh Sách Người Dùng</h1>
        <div class="form-group">
            <label class="col-md-3">Họ và Tên:</label>
            <div class="col-md-9">
                <input class="form-control" type="text" name="Name" value="{{$user -> Name}}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3">Giới tính:</label>
            <div class="col-md-9">
                <input class="form-control" type="text" name="Gender" value="{{$user -> Gender}}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3">Email:</label>
            <div class="col-md-9">
                <input class="form-control" type="email" name="Email" value="{{$user -> Email}}" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3">Số điện thoại:</label>
            <div class="col-md-9">
                <input class="form-control" type="digit" name="Phone" value="{{$user -> Phone}}" required>
            </div>
            <div class="col-md-9" style="margin-left: 650px;margin-top: 30px">
                <button class="btn btn-primary" type="submit">Lưu thông tin</button>
            </div>
        </div>
    </form>
</div>

@endsection