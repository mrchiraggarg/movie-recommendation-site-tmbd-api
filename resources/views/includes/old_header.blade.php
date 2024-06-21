


{{-- <header class="header-area bg-black section-padding-lr">
    <div class="container-fluid">
        <div class="header-wrap header-netflix-style">
            <div class="logo-menu-wrap">
                <!-- Logo -->
                <div class="logo">
                    <a href="{{ url('/') }}"><img class="set-logo" src="/assets/images/logo/logo-3.png"
                            alt=""></a>
                </div>
                <div class="main-menu main-theme-color-four">
                    <nav class="main-navigation">
                        <ul>
                            <li class="active">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ url('/movie') }}">Movies</a>
                            </li>
                            <li>
                                <a href="{{ url('/tv') }}">Series</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="right-side d-flex">
                <!-- search-input-box start -->
                <div class="header-search-2">
                    <a class="search-toggle" href="#">
                        <i class="zmdi zmdi-search s-open"></i>
                        <i class="zmdi zmdi-close s-close"></i>
                    </a>
                    <div class="search-wrap-2">
                        <form action="{{ url('/search/') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input placeholder="Search" name="input" type="text" autocomplete="off">
                            <button class="button-search"><i class="zmdi zmdi-search"></i></button>
                        </form>
                    </div>
                </div>
                <!-- search-input-box end -->
                <!-- notifications start -->
                <!-- mobile-menu start -->
                <div class="mobile-menu d-block d-lg-none"></div>
                <!-- mobile-menu end -->
            </div>
        </div>
    </div>
</header> --}}


<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="subscribe-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="zmdi zmdi-close s-close"></i></button>
            </div>
            <div class="modal-body">
                <h5 id="exampleModalLabel">Ready to watch? Enter your email to create or restart your
                    membership.</h5>
                <div class="create-membership-wrap modify">
                    <input placeholder="Email Address">
                    <button class="landing-btn-style" type="button">Get Started</button>
                </div>
            </div>
        </div>
    </div>
</div> --}}