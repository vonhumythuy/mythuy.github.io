@extends('admin.layouts.master') @section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <form action="{{route("PostEditCourse",$class -> id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1 class="h3 mb-2 text-gray-800">Danh Sách Khóa Học</h1>
        <div class="form-group">
            <label class="col-md-3">Tên Khóa Học:</label>
            <div class="col-md-9">
                <input class="form-control" type="text" name="Name" value="{{$class -> Name}}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3">Ngày bắt đầu:</label>
            <div class="col-md-9">
                <input class="form-control" type="text" name="StartDate" value="{{$class -> StartDate}}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3">Ngày kết thúc:</label>
            <div class="col-md-9">
                <input class="form-control" type="text" name="EndDate" value="{{$class -> EndDate}}" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3">Kéo dài:</label>
            <div class="col-md-9">
                <input class="form-control" type="text" name="keodai" value="{{$class -> keodai}}" required>
            </div>
            <div class="col-md-9" style="margin-left: 650px;margin-top: 30px">
                <button class="btn btn-primary" type="submit">Lưu thông tin</button>
            </div>
        </div>
    </form>
</div>

@endsection