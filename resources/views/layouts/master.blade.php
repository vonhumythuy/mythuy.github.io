<!DOCTYPE html>
<html lang="zxx" class="no-js">
@include("layouts.header")
<body>
  @include("layouts.menu")
    <!-- start banner Area -->
    @yield("content") 
<!-- start footer Area -->
<footer class="footer-area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="single-footer-widget" style="margin-top: 30px">
                    <h6>S.Information Technology</h6>
                      <h1>Side By Side</h1>
                      <p>
                        Hãy tin tưởng chúng tôi!
                      </p>
                    <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    &copy;<script>document.write(new Date().getFullYear());</script> Website is made with <i class="" aria-hidden="true"></i> by <a href="https://www.facebook.com/vonhumythuy98" target="_blank">VoNhuMyThuy</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer>
          <!-- End footer Area -->
  <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>      
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>     
      <script src="js/easing.min.js"></script>      
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script> 
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script> 
      <script src="js/jquery.tabs.min.js"></script>           
    <script src="js/jquery.nice-select.min.js"></script>  
          <script src="js/isotope.pkgd.min.js"></script>      
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/simple-skillbar.js"></script>             
    <script src="js/owl.carousel.min.js"></script>              
    <script src="js/mail-script.js"></script> 
    <script src="js/main.js"></script>  
    <!--Sweet Alert-->
<script type="text/javascript" src="Plugin/sweetalert.min.js"></script>

<script>
    var msg = '{{Session::get('success')}}';
    var exist = '{{Session::has('success')}}';
    if(exist){
        swal("Thành công",msg,"success");
    }
</script>


<script>
    var msg = '{{Session::get('loi')}}';
    var exist = '{{Session::has('loi')}}';
    if(exist){
        swal("Xảy ra lỗi",msg,"warning");
    }
</script>

</body>

</html>