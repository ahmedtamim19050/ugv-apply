<x-app>
        <!-- header banner -->
        <div class="banner v__1">
            <div class="container">
                <div class="col-sm-12">
                    <div class="banner__wrapper">
                        <div class="banner__wrapper--left">
                            <img src="{{asset('assets/images/banner/banner-left.jpg')}}" alt="">
                        </div>
                        <div class="banner__wrapper--middle">
                            <div class="banner__content">
                                <h6 class="banner__content--sub">
                                    <img src="{{asset('assets/images/icon/e-cap.svg')}}" alt="cap"> knowledge meets innovation
                                </h6>
                                <h1 class="banner__content--title">
                                    University Of 
                                    <span>Global Village</span>
                                </h1>
                                <div class="banner__content--circle rts__circle v__2">
                                    <svg class="spinner" viewBox="0 0 100 100">
                                        <defs>
                                            <path id="circle" d="M50,50 m-37,0a37,37 0 1,1 74,0a37,37 0 1,1 -74,0"></path>
                                        </defs>
                                        <text>
                                            <textPath xlink:href="#circle">University Of Global Village (UGV)  * Estd. 2016 * Explore Future *</textPath>
                                        </text>
                                    </svg>
                                    <div class="rts__circle--icon save-from-hidden">
                                        <a href="https://www.youtube.com/watch?v=7ahgosTZJHg" class="video-play  rts-video-btn popup-video">
                                            <i class="fa-sharp fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="banner__content--description">
                                    <p>Remember to tailor the section names to fit the specific needs and
                                        structure of your university website.
                                    </p>
                                    <a href="{{route('apply.now')}}" class="rts-theme-btn btn-arrow">Apply Now
                                        <span><i class="fa-regular fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="banner__wrapper--right">
                            <img src="assets/images/banner/banner-right.jpg" alt="banner right">
                        </div>
                    </div>
                    <!-- banner animated shape -->
                    <div class="banner__wrapper--shape">
                        <img src="assets/images/banner/banner-svg.svg" alt="banner">
                    </div>
                </div>
            </div>
            <div class="grid-line">
                <div class="grid-lines">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <!-- header banner end -->
        <!-- About -->
        <section class="about rts__padding--120-100 v__1">
            <div class="container">
                <div class="row justify-content-md-center align-items-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="about__images">
                            <div class="about__images--wrapper">
                                <div class="about__images--wrapper--left">
                                    <img src="assets/images/about/building.jpg" alt="">
                                </div>
                                <div class="about__images--wrapper--center">
                                    <div class="rts__circle v__1">
                                        <svg class="spinner" viewBox="0 0 100 100">
                                            <defs>
                                                <path id="circle-2" d="M50,50 m-37,0a37,37 0 1,1 74,0a37,37 0 1,1 -74,0"></path>
                                            </defs>
                                            <text>
                                                <textPath xlink:href="#circle-2">University Of GLobal Village * Estd. 2016 * </textPath>
                                            </text>
                                        </svg>
                                        <div class="rts__circle--icon">
                                            <i class="fa-light fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="about__images--wrapper--right">
                                    <img src="assets/images/about/about-image.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="about__content">
                            <h2 class="ugv__title">About Our University Of GLobal Village</h2>
                            <p class="ugv__description">University of Global Village (UGV), the first private university in southern part of Bangladesh (Barisal division), was established by the University of Global Village Trust and founded by Infra Polytechnic Institute, Barisal. The government of Bangladesh and University Grants Commission (UGC) approved the establishment of UGV in 2016 under Private University Act (PUA)-2010.

                            </p>
                            <div class="stroke__text v__1">EST. 2016</div>
                            <a href="https://ugv.edu.bd/" class="rts-nbg-btn btn-arrow">University Overview <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- funfact -->
            <div class="container rts__pt100">
                <div class="row justify-content-center">
                    <div class="col-lg-12 rts-funfact v__1">
                        <div class="rts-funfact-wrapper">
                            <div class="single-cta-item">
                                <h2 class="single-cta-item__title">6,000</h2>
                                <p>Happy Students</p>
                            </div>
                            <div class="single-cta-item">
                                <h2 class="single-cta-item__title">8</h2>
                                <p>Approved Courses</p>
                            </div>
                            <div class="single-cta-item">
                                <h2 class="single-cta-item__title">150</h2>
                                <p>Certified Teachers & Trainers</p>
                            </div>
                            <div class="single-cta-item">
                                <h2 class="single-cta-item__title">3,000</h2>
                                <p>Graduate Students</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->

</x-app>