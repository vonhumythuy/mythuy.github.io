<header id="header">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            
            <div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><div id="logo"><a href="{{Route('index')}}"><img src="img/banner2.png" alt="" title="" width="60%" /></a></div></li>
                    <li><a href="{{route('about')}}">Giới Thiệu</a></li>
                    <li><a href="{{Route('certificate')}}">Luyện Thi MOS</a></li>
                    <li><a href="{{Route('document')}}">Tài Liệu</a></li>
                    <li><a href="{{Route('course')}}">Khóa Học</a></li>
                    <li><a href="{{Route('tutor')}}">Gia Sư</a></li>
                    <li><a href="{{Route('recruitment')}}">Tuyển Dụng</a></li>
                    <li><a href="{{Route('contact')}}">Liên hệ</a></li>
                    @if(Auth::check() == 1)
                    
                    @else
                        <li><a href="{{Route('login')}}"><span class="glyphicon glyphicon-log-in"></span>Đăng Nhập</a></li>
                        <li><a href="{{Route('Getsignup')}}"><span class="glyphicon glyphicon-log-in">Đăng Ký</span></a></li>
                    @endif
                </ul>
            </nav>
        </div>
            <!-- #nav-menu-container -->
        </div>
    </div>
</header>
<!-- #header -->