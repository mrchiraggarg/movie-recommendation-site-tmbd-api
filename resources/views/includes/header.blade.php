<header class="header-area bg-black section-padding-lr">
    <div class="container-fluid">
        <div class="header-wrap header-netflix-style">
            <div class="logo-menu-wrap">
                <!-- Logo -->
                <div class="logo">
                    <a href="{{ url('/') }}"><img class="set-logo" src="/assets/images/logo/logo-3.png"
                            alt=""></a>
                </div>
                <!-- Logo -->
                <div class="main-menu main-theme-color-four">
                    <nav class="main-navigation">
                        <ul>
                            <li class="active">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ url('/movie') }}">Movies</a>
                                {{-- <ul class="sub-menu">
                                    <li><a href="horror-movie.html">Horror Movies</a></li>
                                    <li><a href="romantic-movie.html">Romantic Movies</a></li>
                                </ul> --}}
                            </li>
                            <li>
                                <a href="{{ url('/tv') }}">Series</a>
                                {{-- <ul class="sub-menu">
                                    <li><a href="horror-series.html">Horror Series</a></li>
                                    <li><a href="romantic-series.html">Romantic Series</a></li>
                                </ul> --}}
                            </li>
                            {{-- <li><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="about-2.html">About Us</a></li>
                                    <li><a href="pricing-plan-2.html">Pricing</a></li>
                                    <li><a href="watchlist.html">Watchlist</a></li>
                                    <li><a href="history.html">History</a></li>
                                    <li><a href="movie-details.html">Movie details</a></li>
                                    <li><a href="series-details.html">Series details</a></li>
                                    <li><a href="faq-2.html">FAQ</a></li>
                                    <li><a href="my-account-2.html">My Account</a></li>
                                    <li><a href="landing-page.html">Landing Page</a></li>
                                </ul>
                            </li>
                            <li><a href="pricing-plan-2.html">Pricing</a></li>
                            <li><a href="contact-2.html">Contact</a></li> --}}
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
                {{-- <div class="notifications-bar btn-group">
                    <a href="#" class="notifications-iocn white" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="zmdi zmdi-notifications"></i> <span>5</span>
                    </a>
                    <div class="dropdown-menu netflix-notifications-style red">
                        <h5>Notifications</h5>
                        <ul>
                            <li class="single-notifications">
                                <a href="#">
                                    <span class="image"><img src="/assets/images/review/author-01.png"
                                            alt=""></span>
                                    <span class="notific-contents">
                                        <span>Lorem ipsum dolor sit amet consectetur.</span>
                                        <span class="time">21 hours ago</span>
                                    </span>

                                </a>
                            </li>
                            <li class="single-notifications">
                                <a href="#">
                                    <span class="image"><img src="/assets/images/review/author-01.png"
                                            alt=""></span>
                                    <span class="notific-contents">
                                        <span>Lorem ipsum dolor sit amet consectetur.</span>
                                        <span class="time">21 hours ago</span>
                                    </span>

                                </a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                <!-- notifications end -->
                <!-- our-profile-area start -->
                {{-- <div class="our-profile-area ">
                    <a href="#" class="our-profile-pc" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img src="/assets/images/review/author-01.png" alt="">
                    </a>
                    <div class="dropdown-menu netflix-profile-style red">
                        <ul>
                            <li class="single-list"><a href="history.html">History</a></li>
                            <li class="single-list"><a href="watchlist.html">Watchlist</a></li>
                            <li class="single-list"><a href="my-account-2.html">My Account</a></li>
                            <li class="single-list"><a href="login-and-register-2.html">Log Out</a></li>
                        </ul>
                    </div>
                </div> --}}
                <!-- our-profile-area end -->
                {{-- <div class="subscribe-btn-wrap">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        class="subscribe-btn">Subscribe Now</button>
                </div> --}}
                <!-- mobile-menu start -->
                <div class="mobile-menu d-block d-lg-none"></div>
                <!-- mobile-menu end -->
            </div>
        </div>
    </div>
</header>


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
