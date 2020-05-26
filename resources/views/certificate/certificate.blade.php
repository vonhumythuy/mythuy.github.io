@extends('layouts.master')
@section('content')
<section class="services-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content  col-lg-7">
                <div class="title text-center">
                    <h1 class="mb-10">Luyện Thi MOS</h1>
                    <p>Hiện nay, ngày càng có nhiều doanh nghiệp trong và ngoài nước quan tâm đến chứng chỉ Tin học Văn phòng chuẩn quốc tế MOS khi tuyển dụng nhân viên, đặc biệt là các ngân hàng lớn, tập đoàn viễn thông và các công ty nước ngoài. Tuy nhiên, vì MOS còn mới ở VN nên việc học và thi nó cũng còn rất nhiều vấn đề cần bàn.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single-services">
                    <a href="#"><h4>M01</h4></a>
                    <p>
                        Luyện thi MOS cho 01 môn Word, Excel hoặc PPT trong 10 buổi : 1000K (SV giảm 20% còn 800K, yêu cầu thi đầu vào là 250/1000, phù hợp cho người đã làm thực tế nhiều rồi)
                    </p>
					<a class="price-btn text-uppercase" href="{{route('advisory')}}">Đăng ký</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-services">
                    <a href="#"><h4>M02</h4></a>
                    <p>
                        Học thực hành thực tế & Luyện thi MOS cho 01 môn Word, Excel hoặc PPT trong 15 buổi: 1500K (SV giảm 20% còn 1200K, không phải Test đầu vào, phù hợp cho người mới bắt đầu hoặc chưa Thực hành thực tế nhiều)
                    </p>
					<a class="price-btn text-uppercase" href="{{route('advisory')}}">Đăng ký</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

