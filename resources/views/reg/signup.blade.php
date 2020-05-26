@extends('layouts.master') 
@section('content')
<section class="banner-area >
<div id="signup" class="modal fade" role="dialog">
  <div class="modal-dialog"> 
    <!-- Modal content-->
    <div class="modal-content">
      <div id="content" style="padding: 50px; background: #003333; color: white; margin: 60px 0px;">
      CHÀO MỪNG BẠN ĐẾN VỚI S.InformationTechnology
    </div>
      <div class="modal-body">
        <form class="form-horizontal" action="{{Route("PostSignin")}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label class="col-md-3">Tên đăng nhập:</label>
            <div class="col-md-9">
              <input class="form-control" type="text" name="username" placeholder="Nhập tên đăng nhập" required  autofocus>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3">Mật khẩu:</label> 
            <div class="col-md-9">
              <input class="form-control" type="password" name="password" placeholder="Nhập mật khẩu" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3">Nhập lại:</label>
            <div class="col-md-9">
              <input class="form-control" type="password" name="re_password" placeholder="Nhập lại mật khẩu" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3">Họ và Tên:</label>
            <div class="col-md-9">
              <input class="form-control" type="text" name="name" placeholder="Nhập họ và tên ...">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3">Giới tính:</label>
            <div class="col-md-9">
              <input class="form-control" type="text" name="gender" placeholder="Giới tính ...">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3">Email:</label>
            <div class="col-md-9">
              <input class="form-control" type="email" name="email" placeholder="Nhập địa chỉ email..." required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3">Số điện thoại:</label>
            <div class="col-md-9">
              <input class="form-control" type="digit" name="phone" placeholder="Nhập số điện thoại..." required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-offset-3 col-md-9">
              <button class="btn btn-primary" type="submit">Đăng ký</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
@endsection