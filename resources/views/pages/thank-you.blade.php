<x-app>
    <!-- BREADCRUMB AREA -->
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg"
        style="background-image: url(assets/images/banner/breadcrumb.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thank You</li>
                        </ul>
                        <h2 class="section-title">Thank you</h2>
                        <p class="text-light">Thank you for you application</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt--100 pb--80">
        <div class="container">
            <div class="row">
                <div class="rts-section text-center">
                    <a href="{{ route('apply.view',$uid) }}" class="rts-theme-btn btn-arrow">View Application
                        <span><i class="fa-regular fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-app>
