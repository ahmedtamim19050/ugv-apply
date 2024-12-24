<x-app>
    <div class="container vh-100 d-flex justify-content-center align-items-center flex-column">
        <h1>
            Thank you
        </h1>
        <p>
            We have received you application you will get to hear from us soon
        </p>
        {{-- <a style="text-decoration: underline" href="{{ url('/') }}">Go back home</a> --}}
        <section class="pt--50 pb--80">
            <div class="container">
                <div class="row">
                    <div class="rts-section text-center">
                        <a href="{{ url('/') }}" class="rts-theme-btn btn-arrow">Go back home
                            <span><i class="fa-regular fa-arrow-left"></i></span>
                        </a>
                        <a href="{{ route('apply.view', $uid) }}" class="rts-theme-btn btn-arrow">View Application
                            <span><i class="fa-regular fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app>
