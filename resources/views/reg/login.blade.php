@extends('layouts.master') 
@section('content')
<section class="banner-area >
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div id="content" style="padding: 50px; background: #003333; color: white; margin: 60px 0px;">
    CHÀO MỪNG BẠN ĐẾN VỚI S.InformationTechnology
</div>
      <div class="modal-body">
        <form class="form-horizontal" action="{{Route('PostLogin')}}" method="POST" role="form">
          @csrf
          <fieldset>
            <div class="form-group">
                <input class="form-control" placeholder="Tên tài khoản" name="account" autofocus>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" value="">
            </div>
            <button type="submit" class="btn btn-lg btn-primary btn-block">Đăng nhập</button>
        </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
@endsection