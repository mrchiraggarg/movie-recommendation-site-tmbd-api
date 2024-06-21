<header class="header-area inner-header section-padding-lr">
    <div class="container-fluid">
        <div class="row row-cols-lg-2 mb-n6 align-items-center">
            <div class="col mb-6">
                <div class="logo">
                    {{-- <a href="index-4.html"><img src="assets/images/logo/logo.png" alt=""></a> --}}

                    <a href="{{ url('/') }}"><img class="set-logo" src="{{ asset('/assets/images/logo/logo-3.png')}}"
                            alt=""></a>
                </div>
            </div>
            <div class="col mb-6">
                <div class="sign-in-up-btn-wrap">
                    <a class="sign-in-up-btn-style" style="margin-right: 15px;" href="{{ url('/movie') }}">Movies</a>
                    <a class="sign-in-up-btn-style" style="margin-right: 15px;" href="{{ url('/tv') }}">Series</a>
                    <a class="sign-in-up-btn-style" style="margin-right: 15px;" href="{{ url('/search') }}">Search</a>
                </div>
            </div>
        </div>
    </div>
</header>

