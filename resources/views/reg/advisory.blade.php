@extends('layouts.master') 
@section('content')
<section class="banner-area>
<div id="advisory" class="modal fade" role="dialog">
  <div class="modal-dialog"> 
    <!-- Modal content-->
    <div class="modal-content">
      
      <div class="modal-body">
        <form class="form-horizontal" action="{{Route('PostAdvisory')}}" method="POST" onsubmit="return CheckData (this)" enctype="multipart/form-data">
          @csrf

          <div class="form-group" style="margin-top: 100px">
            <label class="col-md-3" >Họ và Tên:</label>
            <div class="col-md-9">
              <input class="form-control" type="text" name="name" placeholder="Nhập họ và tên ..." required>
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
              <input class="form-control" type="number" name="phone" placeholder="Nhập số điện thoại..." required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3">Nội Dung</label>
            <div >
              <textarea class="form-control" style="margin-left: 20px" rows="8" cols="40" type="text" name="content" placeholder="Nhập nội dung cần tư vấn..." required></textarea>
            </div>
          </div>


          <div class="form-group">
            <div class="col-md-offset-3 col-md-9">
              <button class="btn btn-primary" type="submit">Đăng ký tư vấn</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
@endsection