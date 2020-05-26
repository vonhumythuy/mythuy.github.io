@extends("layouts.master")
@section("content")
<section class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 banner-left" style="margin-top: 150px" >
                <h6>S.Information Technology</h6>
                <h1>Side By Side</h1>
                <p>
                    Chúng tôi sẽ đồng hành cùng bạn cho đến khi kỹ năng của bạn đạt cấp độ cao nhất .
                </p>
                <p>
                    Hãy tin tưởng chúng tôi!
                </p>
                
            </div>
            <div class="col-lg-6 col-md-6 home-about-right" style="margin-top: 150px" >
                <img class="img-fluid" src="img/avt.png" alt="">
            </div>
            
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start home-about Area -->
<section class="home-about-area pt-120">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6 home-about-left">
                <img class="img-fluid" src="img/a1.png" alt="">
            </div>
            <div class="col-lg-6 col-md-6 home-about-right">
                <h6>GIỚI THIỆU TRUNG TÂM</h6>
                <h1 class="text-uppercase">S.Information Technology</h1>
                <p>
                    Trung tâm Tin học S chuyên đào tạo TIN HỌC VĂN PHÒNG cho CÁ NHÂN và DOANH NGHIỆP. Phương pháp đào tạo là tập trung hướng dẫn THỰC HÀNH trực tiếp theo khả năng của từng học viên, giúp học viên học một cách thoải mái và đạt kết quả cao, sau khi học xong đa số học viên đều có khả năng làm thực tế được.
                </p>
                <p>
                    Học viên của Trung tâm đa số là Sinh viên, chiếm khoảng 70%. Trung tâm thường có những chính sách ưu đãi cụ thể dành cho Sinh viên như giảm 20% học phí, tặng 100K mùa tựu trường, 50% học phí cho Sinh viên thuộc diện nghèo.
                </p>
                <p>
                    Ngoài ra, Trung tâm cũng tổ chức luyện thi chứng chỉ Tin học Văn phòng chuẩn Quốc tế MOS (Microsoft Office Specialist). Từ tháng 04-2014, Trung tâm Tin học MS đã chính thức trở thành đối tác của IIG VN trong việc tổ chức đào tạo và luyện thi chứng chỉ MOS.
                </p>
                <p>
                    Giáo viên của Trung tâm luôn nhiệt tình, hòa đồng và vui vẻ khi giảng dạy. Tất cả đều đã tốt nghiệp đại học CNTT (ĐHBK, ĐHSP, Công Nghệ…), đặc biệt đều đã có chứng chỉ Tin học văn phòng chuẩn Quốc Tế MOS của Microsoft cấp.
                </p>
                <a href="{{Route("about")}}" class="primary-btn text-uppercase">Xem Chi Tiết</a>
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->

<!-- Start services Area -->
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
                    <a href="{{Route("certificate")}}" class="primary-btn text-uppercase">Xem Chi Tiết</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-services">
                    <a href="#"><h4>M02</h4></a>
                    <p>
                        Học thực hành thực tế & Luyện thi MOS cho 01 môn Word, Excel hoặc PPT trong 15 buổi: 1500K (SV giảm 20% còn 1200K, không phải Test đầu vào, phù hợp cho người mới bắt đầu hoặc chưa Thực hành thực tế nhiều)
                    </p>
                    <a href="{{Route("certificate")}}" class="primary-btn text-uppercase">Xem Chi Tiết</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End services Area -->

<!-- Start fact Area -->
<section class="facts-area section-gap" id="facts-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 single-fact">
                <h1 class="counter">{{$user -> count()}}</h1>
                <p>Học Viên Đã Đăng Ký Khóa Học</p>
            </div>
            <div class="col-lg-3 col-md-6 single-fact">
                <h1 class="counter">{{$user -> count() * 0.99}}</h1>
                <p>Hài Lòng</p>
            </div>
            <div class="col-lg-3 col-md-6 single-fact">
                <h1 class="counter">{{$user -> count() * 0.01}}</h1>
                <p>Không Hài Lòng</p>
            </div>
            <div class="col-lg-3 col-md-6 single-fact">
                <h1 class="counter">{{$user -> count() * 0.99}}</h1>
                <p>Học Viên Đã Hoàn Thành Khóa Học</p>
            </div>
        </div>
    </div>
</section>
<!-- end fact Area -->

<!-- Start portfolio-area Area -->
<section class="portfolio-area section-gap" id="portfolio">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Tài Liệu</h1>
                </div>
            </div>
        </div>

        <div class="filters">
            <ul>
                <li class="active" data-filter="*">Tất Cả</li>
                <li data-filter=".tinhocvanphong">Tin Học Văn Phòng</li>
                <li data-filter=".laptrinh">Lập Trình</li>
                <li data-filter=".photoshop">Photoshop</li>
            </ul>
        </div>

        <div class="filters-content">
            <div class="row grid">
                <div class="single-portfolio col-sm-4 all tinhocvanphong">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="img/c1.jpg" alt="">
                        </div>
                        <a href="img/c1.jpg" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                            </div>
                        </a>
                    </div>
                    <div class="p-inner">
                        <a href="https://drive.google.com/open?id=1aCCKIuMz10QInffM_YuVkNJQa_NN7Tf3" Target="blank"><h4>Thủ thuật Excel</h4></a>
                        <div class="cat">tinhocvanphong</div>
                    </div>
                </div>

                <div class="single-portfolio col-sm-4 all tinhocvanphong">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="img/c4.jpg" alt="">
                        </div>
                        <a href="img/c4.jpg" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                            </div>
                        </a>
                    </div>
                    <div class="p-inner">
                        <h4 href="https://drive.google.com/open?id=1aCCKIuMz10QInffM_YuVkNJQa_NN7Tf3">Thủ thuật Word</h4>
                        <div class="cat">tinhocvanphong</div>
                    </div>
                </div>

                <div class="single-portfolio col-sm-4 all tinhocvanphong">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="img/c3.png" alt="">
                        </div>
                        <a href="img/c3.png" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                            </div>
                        </a>
                    </div>
                    <div class="p-inner">
                        <h4 href="https://drive.google.com/open?id=1aCCKIuMz10QInffM_YuVkNJQa_NN7Tf3">Thủ thuật Access</h4>
                        <div class="cat">tinhocvanphong</div>
                    </div>
                </div>

                <div class="single-portfolio col-sm-4 all tinhocvanphong">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="img/c5.jpg" alt="">
                        </div>
                        <a href="img/c5.jpg" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                            </div>
                        </a>
                    </div>
                    <div class="p-inner">
                        <h4 href="https://drive.google.com/open?id=1aCCKIuMz10QInffM_YuVkNJQa_NN7Tf3">Thủ thuật PowerPoint</h4>
                        <div class="cat">tinhocvanphong</div>
                    </div>
                </div>

                <div class="single-portfolio col-sm-4 all laptrinh">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="img/c6.jpg" alt="">
                        </div>
                        <a href="img/c6.jpg" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                            </div>
                        </a>

                    </div>
                    <div class="p-inner">
                        <h4 href="https://drive.google.com/open?id=1aCCKIuMz10QInffM_YuVkNJQa_NN7Tf3">Lập Trình C</h4>
                        <div class="cat">laptrinh</div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all laptrinh">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="img/c7.png" alt="">
                        </div>
                        <a href="img/c7.png" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                            </div>
                        </a>
                    </div>
                    <div class="p-inner">
                        <h4 href="https://drive.google.com/open?id=1aCCKIuMz10QInffM_YuVkNJQa_NN7Tf3">Lập Trình Java</h4>
                        <div class="cat">laptrinh</div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all laptrinh">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="img/c8.png" alt="">
                        </div>
                        <a href="img/c8.png" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                            </div>
                        </a>
                    </div>
                    <div class="p-inner">
                        <h4 href="https://drive.google.com/open?id=1aCCKIuMz10QInffM_YuVkNJQa_NN7Tf3">Lập Trình PHP</h4>
                        <div class="cat">laptrinh</div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all laptrinh">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="img/c9.jpg" alt="">
                        </div>
                        <a href="img/c9.jpg" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                            </div>
                        </a>
                    </div>
                    <div class="p-inner">
                        <h4 href="https://drive.google.com/open?id=1aCCKIuMz10QInffM_YuVkNJQa_NN7Tf3">Lập Trình Python</h4>
                        <div class="cat">laptrinh</div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all laptrinh">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="img/c10.jpg" alt="">
                        </div>
                        <a href="img/c10.jpg" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                            </div>
                        </a>
                    </div>
                    <div class="p-inner">
                        <h4 href="https://drive.google.com/open?id=1aCCKIuMz10QInffM_YuVkNJQa_NN7Tf3">Lập Trình Pascal</h4>
                        <div class="cat">laptrinh</div>
                    </div>
                </div>

                <div class="single-portfolio col-sm-4 all photoshop">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="img/c11.jpg" alt="">
                        </div>
                        <a href="img/c11.jpg" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                            </div>
                        </a>
                    </div>
                    <div class="p-inner">
                        <h4 href="https://drive.google.com/open?id=1aCCKIuMz10QInffM_YuVkNJQa_NN7Tf3">Photoshop căn bản</h4>
                        <div class="cat">photoshop</div>
                    </div>
                </div>
                <div class="single-portfolio col-sm-4 all photoshop">
                    <div class="relative">
                        <div class="thumb">
                            <div class="overlay overlay-bg"></div>
                            <img class="image img-fluid" src="img/c11.jpg" alt="">
                        </div>
                        <a href="img/c11.jpg" class="img-pop-up">
                            <div class="middle">
                                <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                            </div>
                        </a>
                    </div>
                    <div class="p-inner">
                        <h4 href="https://drive.google.com/open?id=1aCCKIuMz10QInffM_YuVkNJQa_NN7Tf3">Photoshop nâng cao</h4>
                        <div class="cat">photoshop</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End portfolio-area Area -->

<!-- Start testimonial Area -->
<section class="testimonial-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Khách hàng nói gì về chúng tôi ?</h1>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-testimonial">
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="img/u3.jpg" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            Giáo viên nhiệt tình, cơ sở vật chất tiện nghi
                        </p>
                        <h4>Ngô Quang Chính Nghĩa</h4>
                        <p>Nhân Viên Văn Phòng</p>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="img/u1.jpg" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            Cám ơn trung tâm đã giúp tôi trong thời gian qua.
                        </p>
                        <h4>Hồ Ái Như</h4>
                        <p>Sinh Viên</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End testimonial Area -->

<!-- Start price Area -->
<section class="price-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
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
    </div>
</section>
<!-- End price Area --> 
@endsection