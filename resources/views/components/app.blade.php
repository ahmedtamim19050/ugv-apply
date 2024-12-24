<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.themewant.com/unipix/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Dec 2024 17:16:35 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<<<<<<< HEAD
=======
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
>>>>>>> 31fe5535c8c87ea0b36981bac444c239771c185c

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
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
                            <a href="index-2.html" class="header__logo--link">
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
                                        <li class="navigation__menu--item has-child has-arrow">
                                            <a href="#" class="navigation__menu--item__link">Download Application
                                                Copy</a>

                                        </li>

                                        <li class="navigation__menu--item">
                                            <a href="contact.html" class="navigation__menu--item__link">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header__right">
                            <div class="header__right--item">

                                <div id="search-btn" class="search__trigger">
                                    <i class="fa-sharp fa-light fa-magnifying-glass"></i>
                                </div>
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
                                <li class="social__link"><a href="https://www.facebook.com/ugvbarisal"><i class="fa-brands fa-facebook"></i></a>
                                </li>
                                {{-- <li class="social__link"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li class="social__link"><a href="#"><i class="fa-brands fa-linkedin"></i></a></li> --}}
                                <li class="social__link"><a href="https://www.youtube.com/channel/UCYYgkrJPlW2vJ-MM3ltQFhg"><i class="fa-brands fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6 class="footer__widget--title">Quick Button</h6>
                        <div class="footer__widget--button">
                            <a href="admission.html" class="cta__button active">Applying</a>

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
                        <p>Copyright &copy; 2024 All Rights Reserved by <a href="#">UVG</a></p>
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
        <!-- inner menu area desktop start -->
        <div class="inner-main-wrapper-desk">
            <div class="thumbnail">
                <img src="assets/images/logo/logo__five.svg" alt="Unipix-university">
            </div>
            <div class="inner-content">
                <p class="disc">
                    A modern HTML template for education, offering intuitive design & essential features for seamless
                    learning experiences.
                </p>
                <!-- offcanvase banner -->
                <div class="offcanvase__banner mt--50">
                    <div class="offcanvase__banner--content">
                        <img src="assets/images/offcanvase.jpg" alt="offcanvase">
                        <a href="admission.html" class="rts-theme-btn">Apply Now</a>
                    </div>
                </div>
                <div class="offcanvase__info">
                    <div class="offcanvase__info--content">
                        <a href="callto:+61485826710"><span><i class="fa-sharp fa-light fa-phone"></i></span>+(61)
                            485-826-710</a>
                        <a href="#"><span><i class="fa-sharp fa-light fa-location-dot"></i></span>Yarra Park,
                            Melbourne, Australia</a>
                        <div class="offcanvase__info--content--social">
                            <p class="title">Follow Us:</p>
                            <div class="social__links">
                                <a href="https://www.facebook.com/ugvbarisal"><i
                                        class="fa-brands fa-facebook"></i></a>
                                {{-- <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a> --}}
                                <a href="https://www.youtube.com/channel/UCYYgkrJPlW2vJ-MM3ltQFhg"><i
                                        class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu-main">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">

                    <li class="has-droupdown">
                        <a href="#" class="main">Homepages</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="index-2.html">Home Style One</a></li>
                            <li><a class="mobile-menu-link" href="index-two.html">Home Style Two</a></li>
                            <li><a class="mobile-menu-link" href="index-three.html">Home Style Three</a></li>
                            <li><a class="mobile-menu-link" href="index-four.html">Home Style Four</a></li>
                            <li><a class="mobile-menu-link" href="index-five.html">Home Style Five</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Pages</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="about.html">About Us</a></li>
                            <li><a class="mobile-menu-link" href="athletics.html">Athletics</a></li>
                            <li class="has-dropdown third-lvl">
                                <a href="javascript:void(0);">Faculty</a>
                                <ul class="submenu third-lvl base">
                                    <li><a class="mobile-menu-link" href="faculty-sub.html">Faculty</a></li>
                                    <li><a class="mobile-menu-link" href="faculty-sub-details.html">Faculty
                                            Details</a></li>
                                    <li><a class="mobile-menu-link" href="faculty.html">Faculty</a></li>
                                    <li><a class="mobile-menu-link" href="faculty-details.html">Faculty Staff
                                            details</a></li>
                                </ul>
                            </li>
                            <li><a class="mobile-menu-link" href="research.html">Research</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Academics</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="academic.html">Academic</a></li>
                            <li><a class="mobile-menu-link" href="admission.html">Admission</a></li>
                            <li><a class="mobile-menu-link" href="academic-area.html">Academic Area</a></li>
                            <li><a class="mobile-menu-link" href="campus-life.html">Campus Life</a></li>
                            <li><a class="mobile-menu-link" href="scholarship.html">Scholarship</a></li>
                            <li><a class="mobile-menu-link" href="tution-fee.html">Tution Fee</a></li>
                            <li><a class="mobile-menu-link" href="alumni.html">Alumni</a></li>
                            <li><a class="mobile-menu-link" href="program-single.html">Program Single</a></li>
                            <li><a class="mobile-menu-link" href="department-details.html">Department Details</a></li>
                        </ul>
                    </li>

                    <li class="has-droupdown">
                        <a href="#" class="main">Events</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="event.html">Event</a></li>
                            <li><a class="mobile-menu-link" href="event-details.html">Event Details</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Blog</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="blog.html">Blog</a></li>
                            <li><a class="mobile-menu-link" href="blog-grid.html">Blog Grid</a></li>
                            <li><a class="mobile-menu-link" href="blog-list.html">Blog List</a></li>
                            <li><a class="mobile-menu-link" href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html" class="main">Contact Us</a>
                    </li>
                </ul>
            </nav>

            <div class="offcanvase__info--content mt--30">
                <a href="callto:+61485826710"><span><i class="fa-sharp fa-light fa-phone"></i></span>+(61)
                    485-826-710</a>
                <a href="#"><span><i class="fa-sharp fa-light fa-location-dot"></i></span>Yarra Park, Melbourne,
                    Australia</a>
                <div class="offcanvase__info--content--social">
                    <p class="title">Follow Us:</p>
                    <div class="social__links">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile menu area end -->
    </div>



    
    <script src="{{asset('assets/js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-ui.js')}}"></script>
    <!-- wow js -->
    <script src="{{ asset('assets/js/vendor/waw.js') }}"></script>
    <!-- mobile menu -->
    <script src="{{ asset('assets/js/vendor/metismenu.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('assets/js/vendor/magnifying-popup.js') }}"></script>
    <!-- swiper JS 10.2.0 -->
    <script src="{{ asset('assets/js/plugins/swiper.js') }}"></script>
    <!-- counterup -->
    <script src="{{asset('assets/js/plugins/counterup.js')}}"></script>
    <script src="{{asset('assets/js/vendor/waypoint.js')}}"></script>
    
    <script src="{{asset('assets/js/plugins/sticky-sidebar.js')}}"></script>
    
    <!-- dymanic Contact Form -->
    <script src="{{ asset('assets/js/plugins/contact.form.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/nice-select.min.js') }}"></script>
    <!-- main Js -->
    @stack('js')
    
    <script src="{{asset('assets/js/main.js')}}"></script>
    
</body>



</html>
