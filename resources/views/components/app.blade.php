<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.themewant.com/unipix/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Dec 2024 17:16:35 GMT -->

<head>
    <title>
        Home| University of Global Village(UGV)
    </title>
    <meta name="description" content="The First Skill Based Hi-Tech University in Bangladesh">
    <meta name="keywords"
        content="Private University, Private university in Bangladesh, Top Private university in Bangladesh, top Private University in Barishal, Barishal Private University, top ten Private university, University of global village,UGV, Global Village university">
    <meta name="Author" content="Kazi Rayhan Reza Tirtho">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>UGV</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logougv.png') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.min.css') }}">
    <!-- bootstrap min css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/magnific-popup.css') }}">

    <!-- nice select js -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.css') }}">
    <!-- custom style css -->

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @stack('css')
</head>

<body class="page">
    <!-- header area start -->
    <header class="header header__sticky v__1">
        <div class="container-fluid" style="background-color: white">
            <div class="row">
                <div class="col-xl-12">
                    <div class="header__wrapper">
                        <div class="header__logo">
                            <a href="{{ url('/') }}" class="header__logo--link">
                                <img src="{{ asset('assets/images/logougv.png') }}" alt="ugv" width="100px">
                            </a>
                        </div>
                        <div class="header__menu">
                            <div class="navigation">
                                <nav class="navigation__menu">
                                    <ul>
                                        <li class="navigation__menu--item has-child has-arrow">
                                            <a href="/" class="navigation__menu--item__link">Home</a>

                                        </li>


                                        <li class="navigation__menu--item has-child has-arrow">
                                            <a href="{{ route('page.fees-stucture') }}"
                                                class="navigation__menu--item__link">Fees Stucture</a>

                                        </li>
                                        <li class="navigation__menu--item has-child has-arrow">
                                            <a href="{{ route('page.admission-rules') }}"
                                                class="navigation__menu--item__link">Admission Rules</a>

                                        </li>
                                        {{-- <li class="navigation__menu--item has-child has-arrow">
                                            <a href="#" class="navigation__menu--item__link">Download Application
                                                Copy</a>

                                        </li> --}}

                                        <li class="navigation__menu--item">
                                            <a href="{{ route('page.contact') }}"
                                                class="navigation__menu--item__link">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div  class="header__right d-lg-none d-md-block">
                            <div class="header__right--item">

                                <div id="menu-btn" class="menu__trigger">
                                    <img src="{{ asset('assets/images/icon/bar__line.svg') }}" alt="bar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->
    {{ $slot }}
    <!-- footer -->
    <footer class="footer v__1" style="">
        <div class="container">
            <div class="row g-5 justify-content-between">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <div class="footer__widget--logo">
                            <a href="index-3.html"><img src="{{ asset('assets/images/logougv.png') }}"
                                    alt="logo"></a>
                        </div>
                        <p class="footer__widget--description">
                            We are passionate education dedicated to providing high-quality resources learners
                            all backgrounds.
                        </p>
                        <div class="footer__widget--social">
                            <ul class="social">
                                <li class="social__link"><a href="https://www.facebook.com/ugvbarisal"
                                        target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                </li>
                                {{-- <li class="social__link"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li class="social__link"><a href="#"><i class="fa-brands fa-linkedin"></i></a></li> --}}
                                <li class="social__link"><a
                                        href="https://www.youtube.com/channel/UCYYgkrJPlW2vJ-MM3ltQFhg"
                                        target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!-- footer copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright__wrapper">
                        <p>Copyright &copy; 2024 All Rights Reserved by <a href="https://ugv.edu.bd/"
                                target="_blank">UGV</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer copyright end -->


    <!-- offcanvase menu -->
    <!-- header style two -->
    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>

        {{-- <div class="inner-main-wrapper-desk">
            <div class="thumbnail">
                <img src="{{asset('assets/images/logougv.png')}}" alt="Unipix-university">
            </div>
            <div class="inner-content">
               
               
               
            </div>
        </div> --}}

        <div class="mobile-menu-main">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li>
                        <a href="/" class="main">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('page.fees-stucture') }}" class="main">Fees Stucture</a>
                    </li>
                    <li>
                        <a href="{{ route('page.admission-rules') }}" class="main">Admission Rules</a>
                    </li>
                    <li>
                        <a href="{{ route('page.contact') }}" class="main">Contact</a>
                    </li>

                </ul>
            </nav>

            <div class="offcanvase__info--content mt--30">
                <a><span><i class="fa-sharp fa-light fa-phone"></i></span> +8801877774010,
                    +8801877774021, +8801877774083</a>
                <a href="#"><span><i class="fa-sharp fa-light fa-location-dot"></i></span>874/322, C&B Road,
                    Barisal.</a>
                <div class="offcanvase__info--content--social">
                    <p class="title">Follow Us:</p>
                    <div class="social__links">
                        <a href="https://www.facebook.com/ugvbarisal" target="_blank"> <i
                                class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.youtube.com/channel/UCYYgkrJPlW2vJ-MM3ltQFhg" target="_blank"><i
                                class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>



    <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-ui.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('assets/js/vendor/waw.js') }}"></script>
    <!-- mobile menu -->
    <script src="{{ asset('assets/js/vendor/metismenu.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('assets/js/vendor/magnifying-popup.js') }}"></script>
    <!-- swiper JS 10.2.0 -->
    <script src="{{ asset('assets/js/plugins/swiper.js') }}"></script>
    <!-- counterup -->
    <script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoint.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/sticky-sidebar.js') }}"></script>

    <!-- dymanic Contact Form -->
    <script src="{{ asset('assets/js/plugins/contact.form.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/nice-select.min.js') }}"></script>
    <!-- main Js -->
    @stack('js')

    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>



</html>
