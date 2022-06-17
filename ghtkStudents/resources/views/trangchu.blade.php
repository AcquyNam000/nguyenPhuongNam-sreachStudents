<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('public/fontend/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('public/fontend/video_and_img/favicon.png')}}" type="image/x-icon">   
    <link rel="stylesheet" href="{{asset('public/fontend/font/fontawesome-free-6.1.1-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/fontend/css/gird.css')}}">
    <link rel="stylesheet" href="{{asset('public/fontend/css/reponsive.css')}}">
    <title>Trang chủ tra cứu thông tin (namnp108)</title>
</head>
<body >

    <header>
            <h1 class="centerText" > TRA CỨU THÔNG TIN TUYỂN SINH <i class="fas fa-cabinet-filing"></i></h1>
            <div class="point-cart">
                <i class="fa-solid fa-caret-down"> <div style="font-size: 10px;" class="text">pull</div></i>
            </div>
    </header>

     <nav class="grid wide">

            <div class="nav-block">
                    <ul class="menu-nav row">
                        <li class="buttonClick">
                           <a href=""> <i class="fa-solid fa-arrow-right-to-bracket"></i> LOGIN</a> 
                        </li>
                        <li class="buttonClick">
                           <a href="{{URL::to('/trangchu')}}"><i class="fa-solid fa-house-chimney"></i>  HOME</a> 
                        </li>
                        <li class="buttonClick">
                           <a href="{{URL::to('/hien')}}"> <i class="fa-solid fa-file-export"></i> TÌM KIẾM</a> 
                        </li>
                    </ul>
            </div>
    </nav>
<section style="margin-bottom: 150px;" class="grid wide">
     @yield('contents')
 </section>

    <!-- phần footer  -->
    <footer>

        <marquee class="footer_textline" ><img width="30px" src="{{asset('public/fontend/video_and_img/chay.png')}}" alt=" người chạy"> Họ và tên : Nguyễn Phương Nam , mã nhân viên namnp108 , Domain : web => backend PHP
            </marquee>

    </footer>

</body>
</html>