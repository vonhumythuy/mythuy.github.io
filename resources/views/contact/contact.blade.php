@extends("layouts.master")
@section("content")
<!-- start banner Area -->
<section class="relative about-banner">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Liên Hệ Với Chúng Tôi			
				</h1>	
		
			</div>	
		</div>
	</div>
</section>
<!-- End banner Area -->				  

<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
	<div class="container">
		<div class="row">
			<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.517819224746!2d106.70233391444071!3d10.771595562229141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f4138cf4909%3A0xaa966d5f7d098671!2sTh%C3%A1p%20Bitexco%20Financial%20Tower!5e0!3m2!1svi!2s!4v1574695321992!5m2!1svi!2s" frameborder="0" style="border:0;" allowfullscreen="" width="100%" height="500px;"></iframe>
			<div class="col-lg-4 d-flex flex-column address-wrap" style="margin-top: 100px">
				<div class="single-contact-address d-flex flex-row">
					
					<div class="fas fa-house-damage" >
						<h5>TP.Hồ Chí Minh</h5>
						
						<p>
							148, Nguyễn Văn Công, F3, Quận Gò Vấp
						</p>
						
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					
					<div class="fas fa-phone">
						<h5>0931610152</h5>
						<p>Mon to Fri 9am to 6 pm</p>
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					
					<div class="fas fa-envelope-square">
						<h5>vonhumythuy@gmail.com</h5>
						<p>Gửi cho chúng tôi mọi thắc mắc của bạn bất cứ lúc nào!</p>
					</div>
				</div>														
			</div>
			<div class="col-lg-8" style="margin-top: 100px">
				<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
					<div class="row">	
						<div class="col-lg-6 form-group">
							<input name="name" placeholder="Nhập Họ Tên" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
						
							<input name="email" placeholder="Nhập Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

							<input name="subject" placeholder="Nhập Chủ Đề" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
						</div>
						<div class="col-lg-6 form-group">
							<textarea class="common-textarea form-control" name="message" placeholder="Nội Dung" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>				
						</div>
						<div class="col-lg-12">
							<div class="alert-msg" style="text-align: left;"></div>
							<button class="genric-btn primary" style="float: right;">Gửi</button>											
						</div>
					</div>
				</form>	
			</div>
		</div>
	</div>	
</section>
<!-- End contact-page Area -->
@endsection