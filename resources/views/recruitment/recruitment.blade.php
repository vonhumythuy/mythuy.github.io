@extends("layouts.master")
@section("content")
<!-- Start portfolio-area Area -->
<section class="portfolio-area section-gap" id="portfolio">
    <div class="container">
    <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center" style="margin-top: 50px">
                <h1 class="mb-10">Tuyển Dụng</h1>
            </div>
        </div>
    </div>
        <div class="filters">
            <ul>
                <li class="active" data-filter="*">Tất Cả</li>
                <li data-filter=".giaovien">Giáo Viên</li>
                <li data-filter=".nhanvien">Nhân Viên</li>
            </ul>
        </div>
        
        <div class="filters-content">
            <div class="row grid">
                <div class="single-portfolio col-sm-4 all giaovien">
                  <div class="relative">
                    <div class="thumb">
                      
                       <img class="image img-fluid" src="img/q1.jpg" style="width: 500px ;height: 300px">
                    </div>
                                              
                          </div>
            <div class="p-inner">
                <h4 >Giáo Viên Lập Trình </h4>
                <a class="price-btn text-uppercase" href="https://mail.google.com" Target="blank"><h4 style="color: red;">Nộp CV ngay</h4></a>
              <div class="cat">giaovien</div>
            </div>                                         
                </div>

               <div class="single-portfolio col-sm-4 all giaovien">
                  <div class="relative">
                    <div class="thumb">
                       <img class="image img-fluid" src="img/q2.jpg" style="width: 500px ;height: 300px">
                    </div>
                                                
          </div>
            <div class="p-inner">
                <h4>Giáo Viên Photoshop</h4>
                <a class="price-btn text-uppercase" href="https://mail.google.com" Target="blank"><h4 style="color: red;">Nộp CV ngay</h4></a>
              <div class="cat">giaovien</div>
            </div>                                         
                </div> 

                <div class="single-portfolio col-sm-4 all nhanvien">
                  <div class="relative">
                    <div class="thumb">
                      
                       <img class="image img-fluid" src="img/q4.jpg"style="width: 500px ;height: 300px">
                    </div>
                                                
                          </div>
            <div class="p-inner">
                <h4>Telesale</h4>
                <a class="price-btn text-uppercase" href="https://mail.google.com" Target="blank"><h4 style="color: red;">Nộp CV ngay</h4></a>
              <div class="cat">nhanvien</div>
            </div>                                         
                </div> 

                <div class="single-portfolio col-sm-4 all nhanvien">
                  <div class="relative">
                    <div class="thumb">
                      
                       <img class="image img-fluid" src="img/q5.jpg"style="width: 500px ;height: 300px">
                    </div>
                                               
                          </div>
                  <div class="p-inner">
                      <h4>Nhân Viên IT</h4>
                      <a class="price-btn text-uppercase" href="https://mail.google.com" Target="blank"><h4 style="color: red;">Nộp CV ngay</h4></a>
                    <div class="cat">nhanvien</div>
                  </div>                                         
                </div> 
                <div class="single-portfolio col-sm-4 all nhanvien">
                  <div class="relative">
                    <div class="thumb">
                      
                       <img class="image img-fluid" src="img/q5.jpg" style="width: 500px ;height: 300px">
                    </div>
                                               
                          </div>
                  <div class="p-inner">
                      <h4>Nhân Viên Kế Toán</h4>
                      <a class="price-btn text-uppercase" href="https://mail.google.com" Target="blank"><h4 style="color: red;">Nộp CV ngay</h4></a>
                    <div class="cat">nhanvien</div>
                  </div>                                         
                </div> 
                <div class="single-portfolio col-sm-4 all nhanvien">
                  <div class="relative">
                    <div class="thumb">
                      
                       <img class="image img-fluid" src="img/q5.jpg" style="width: 500px ;height: 300px">
                    </div>
                                               
                          </div>
                  <div class="p-inner">
                      <h4>Giáo Viên Tin Học Văn Phòng</h4>
                      <a class="price-btn text-uppercase" href="https://mail.google.com" Target="blank"><h4 style="color: red;">Nộp CV ngay</h4></a>
                    <div class="cat">giaovien</div>
                  </div>                                         
                </div>     
        </div>
    </div>
</section>
<!-- End portfolio-area Area -->  
@endsection