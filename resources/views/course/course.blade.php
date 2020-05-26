@extends("layouts.master")
@section("content")
<!-- Start price Area -->
<section class="price-area section-gap">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="menu-content pb-70 col-lg-8">
        <div class="title text-center" style="margin-top: 60px">
          <h1 class="mb-10">Khóa Học Sắp Khai Giảng</h1>
          <p>Trung tâm chủ yếu dạy tập trung THỰC HÀNH THỰC TẾ, đảm bảo học xong ra làm được. Phương pháp dạy KÈM RIÊNG TỪNG NGƯỜI nên có thể HỌC NGAY và lịch học LINH ĐỘNG được</p>
        </div>
      </div>
    </div>          
    <div class="row">
            @foreach($classes as $class)
                <?php
                    $Check = $Check + 1;
                ?>
                <div class="col-lg-3 col-md-6 single-price">
                    <div class="top-part">
                        <h1 class="package-no">{{$Check}}</h1>
                        <h4>{{$class -> Name}}</h4>
                        <p class="mt-10">Từ cơ bản đến nâng cao</p>
                    </div>
                    <div class="package-list">
                        <ul>
                            <li>Thời hạn: 12 buổi</li>
                            <li>Khai giảng: {{\Carbon\Carbon::parse($class -> StartDate) -> format('d-m-Y')}} </li>
                        </ul>
                    </div>
                    <div class="bottom-part">
                        <h1>1.500.000</h1>
                        <a class="price-btn text-uppercase" href="{{Route('PostAdvisory')}}">Đăng ký</a>
                    </div>
                </div>
            @endforeach
  </div>  
</div>
</section>
<!-- End price Area --> 
@endsection