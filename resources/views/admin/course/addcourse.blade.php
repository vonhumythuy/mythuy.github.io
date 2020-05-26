@extends('admin.layouts.master') 
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <form action="{{Route('PostAddCourse')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1 class="h3 mb-2 text-gray-800">Danh Sách Khóa Học</h1>
        <div class="form-group">
            <label class="col-md-3">Tên Khóa Học:</label>
            <div class="col-md-9">
                <input class="form-control" type="text" name="Name" placeholder="Nhập tên khóa học ...">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3">Mô tả:</label>
            <div class="col-md-9">
                <input class="form-control" type="text" name="description" placeholder="Nhập mô tả khóa học ...">
            </div>
        </div>
		
		<div class="form-group">
            <label class="col-md-3">Slot:</label>
            <div class="col-md-9">
                <input class="form-control" type="text" name="Slot" >
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3">Ngày bắt đầu:</label>
            <div class="col-md-9">
                <input class="form-control" type="text" name="StartDate" placeholder="Nhập ngày bắt đầu ...">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3">Ngày kết thúc:</label>
            <div class="col-md-9">
                <input class="form-control" type="text" name="EndDate" placeholder="Nhập ngày kết thúc ...">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3">Kéo dài:</label>
            <div class="col-md-9">
                <input class="form-control" type="text" name="keodai" placeholder="Nhập thời hạn khóa học ...">
            </div>

            
        </div>
        <div class="form-group">
            <label class="col-md-3">Timetostudy:</label>
            <div class="col-md-9">
                <input class="form-control" type="text" name="Timetostudy" >
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3">Datetostudy:</label>
            <div class="col-md-9">
                <input class="form-control" type="text" name="Datetostudy" >
            </div>
        </div>

        <div class="col-md-9" style= "margin-top: 30px">
                <button class="btn btn-primary" type="submit">Thêm</button>
            </div>


    </form>
</div>

@endsection