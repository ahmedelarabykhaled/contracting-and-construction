<!DOCTYPE html >
<html lang="ar">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>مكتب المقاولات والانشاءات الهندسيه</title>
    <link rel="icon" type="image" href="{{url('images/logo.jpg')}}">
    <!-- style sheets -->
    <link rel="stylesheet" type="text/css" href="{{url('css/libs/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/libs/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <style type="text/css">
        .drop
        {
            right: 0px;
            top: 65px;
            display: none;
        }
        .drop:hover
        {
            display: block;
        }

    </style>
</head>
<body>

<!-- navigation bar -->
<section class="border-bottom">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-0">
        <a class="navbar-brand mx-2" href="#">
            <img src="{{url('images/logo.jpg')}}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">الرئيسيه <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('nabza')}}" id="navbarDropdown">
                        عن الشركه
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('akhbar')}}" id="navbarDropdown">
                        المركز الاعلامى
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('mokawalate')}}" id="navbarDropdown">
                        خدمات الشركه
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('masharee3')}}" id="navbarDropdown">
                        المشاريع
                    </a>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('makalate')}}" id="navbarDropdown">
                        مقالات
                    </a>

                </li>
                <li class="nav-item dropdown">
                    <div class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle"id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        الخدمات الالكترونية
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{url('talabas3ar')}}">طلب عرض سعر</a>
                            <a class="dropdown-item" href="{{url('talabas3ar')}}">طلب معاينه موقع</a>
                            <a class="dropdown-item" href="{{url('talabas3ar')}}">طلب استشاره هندسيه</a>
                            <a class="dropdown-item" href="{{url('talabas3ar')}}">غرفه العمليات</a>
                            <a class="dropdown-item" href="{{url('talabas3ar')}}">بلاغات الصيانه</a>
                            <a class="dropdown-item" href="{{url('talabas3ar')}}">الشكاوى والمقترحات</a>
                            <a class="dropdown-item" href="{{url('talabas3ar')}}">طلب توظيف</a>

                            @if(Auth::guard('employee')->check())
                                <a class="dropdown-item" href="{{url('talabas3ar')}}">اداره المهام</a>
                                <a class="dropdown-item" href="{{url('talabas3ar')}}">الارشفه الالكترونيه</a>
                            @endif

                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{url('etasel')}}" id="navbarDropdown">
                        اتصل بنا
                    </a>
                </li>
            </ul>
            <div class="float-right navbar">
                <ul class="navbar-nav mr-auto">
                @if(!Auth::guard('employee')->check())
                    @if(Auth::check())
                    <li class="nav-item">
                        <div class="dropdown">
                            <a style="color: #ccc;" class="btn dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{Auth::user()->name}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('userlogout')}}">تسجيل خروج</a>
                            </div>
                        </div>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{url('userlogin')}}" class="nav-link">تسجيل دخول</a>
                    </li>
                    @endif
                @endif
                @if(!Auth::check())
                    @if(Auth::guard('employee')->check())
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="mx-2 dropdown-toggle btn" style="color: #ccc;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{Auth::guard('employee')->user()->name}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('employeelogout')}}">تسجيل خروج</a>
                            </div>
                        </div>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{url('employeelogin')}}" class="nav-link">دخول موظف</a>
                    </li>
                    @endif
                @endif
                </ul>
            </div>
        </div>

    </nav>
</section>
<!-- end navigation bar -->


@yield('content')


<!--  الفوتر-->
<section class="footer border-top">
    <div class="text-center p-5">
        <a href="#">
            <i class="fab fa-facebook-f mx-2 fa-2x"></i>
        </a>
        <a href="#">
            <i class="fab fa-twitter mx-2 fa-2x"></i>
        </a>
        <a href="#">
            <i class="fab fa-instagram mx-2 fa-2x"></i>
        </a>
        <a href="#">
            <i class="fab fa-whatsapp fa-2x mx-2"></i>
        </a>
        <a href="#">
            <i class="far fa-envelope fa-2x mx-2"></i>
        </a>
        <h2 class="p-3">+2938947294832</h2>
    </div>
</section>
<!--  نهايه الفوتر-->




<script type="text/javascript" src="{{url('js/libs/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/libs/popper.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/libs/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/owl.carousel.min.js')}}"></script>
<!-- <script type="text/javascript" src="{{url('js/app.js')}}"></script> -->
<script type="text/javascript">
    $('.first').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay: true,
        smartSpeed: 500,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
        }
    })

    $('.second').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        smartSpeed: 500,
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
        }
    })
    $('.third').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        smartSpeed: 500,
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
        }
    })
</script>
</body>
</html>
