@extends('layouts.master') 
@section('content')
<section class="banner-area>
<div id="registration" class="modal fade" role="dialog">
  <div class="modal-dialog"> 
    <!-- Modal content-->
    <div class="modal-content">
      
      <div class="modal-body">
        <form class="form-horizontal" action="{{Route('Postregistration')}}" method="POST" onsubmit="return CheckData (this)" enctype="multipart/form-data">
          @csrf

          <div class="form-group" style="margin-top: 80px">
            <label class="col-md-3" >Họ và Tên:</label>
            <div class="col-md-9">
              <input class="form-control" type="text" name="name" placeholder="Nhập họ và tên ...">
            </div>
          </div>

          <div class="form-group">
            <label style="margin-left: 15px">Số điện thoại:</label>
            <div class="col-md-9">
              <input class="form-control" type="number" name="phone" placeholder="Nhập số điện thoại..." required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3">Địa chỉ</label>
            <div >
              <textarea class="form-control" style="margin-left: 20px" rows="8" cols="40" type="text" name="content" placeholder="Nhập địa chỉ..." required></textarea>
            </div>
          </div>

          <div class="form-group" style="margin-left: 15px">
            <label for="course" required>Chọn Khóa Học:</label>

            <select name="cars" id="cars">
              <option value="tinhocvp">Tin Học Văn Phòng</option>
              <option value="excel">Tin Học Excel</option>
              <option value="photoshop">Photoshop</option>
              <option value="dev">Lập Trình</option>
            </select>
          </div>

          <div class="form-group">
            <div >
              <button class="btn btn-primary" type="submit" style="float: right;">Đăng ký</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
@endsection