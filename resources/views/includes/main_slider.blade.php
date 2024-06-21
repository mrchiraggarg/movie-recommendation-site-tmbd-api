<!-- slider area start -->

{{-- @include('includes/header_new') --}}
<div class="slider-area bg-black">
    <div class="container-fluid p-0">
        <div class="hero-slider-four dot-style-1 nav-style-1 slider_image_list">
            {{-- <div class="single-hero-slider-wrap single-animation-wrap slider-height-hm4 bg-image-hm4 slider-bg-color-black d-flex align-items-center slider-bg-position-1 bg-black"
                style="background-image:url({{ env('THUMBNAIL_URL') }}/ovM06PdF3M8wvKb06i4sjW3xoww.jpg);background-position:top;">
                <div class="slider-content-hm4 slider-animated">
                    <h1 class="title animated">Out Of Network </h1>
                    <div class="sub-title-time-wrap">
                        <span class="sub-title animated">Feel Good</span>
                        <span class="time animated">45 Mins</span>
                    </div>
                    <div class="slider-button">
                        <a href="movie-details.html" class="btn-style-hm4 animated">Watch Now</a>
                    </div>
                </div>
            </div>
            <div class="single-hero-slider-wrap single-animation-wrap slider-height-hm4 bg-image-hm4 slider-bg-color-black d-flex align-items-center slider-bg-position-3 bg-black"
            style="background-image:url({{ env('THUMBNAIL_URL') }}/i8dshLvq4LE3s0v8PrkDdUyb1ae.jpg);background-position:top;">
                <div class="slider-content-hm4 slider-animated">
                    <h1 class="title animated">The Love of Mind </h1>
                    <div class="sub-title-time-wrap">
                        <span class="sub-title animated">Romantic Movie</span>
                        <span class="time animated">1 hr 45 Mins</span>
                    </div>
                    <div class="slider-button">
                        <a href="movie-details.html" class="btn-style-hm4 animated">Watch Now</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>


<div class="movie-list section-padding-lr section-pt-50 bg-black">
    <div class="container">
        <div class="landing-hero-content text-center">
            <div class="create-membership-wrap">
                <form action="{{ url('/search/') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input placeholder="Type movie or show name..." name="input" type="text" autocomplete="off">
                    <input class="landing-btn-style-search" type="button" value="Search"></input>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="mt-4">
            <div class="btn-group choose-toggler">
                <label class="btn btn-outline-primary active"><a href="{{ url('/movie') }}"
                        style="font-size: 0.9rem; text-decoration: none !important; color: #fff !important;">Movies</a></label>

                <label class="btn btn-outline-primary active"><a href="{{ url('/tv') }}"
                        style="font-size: 0.9rem; text-decoration: none !important; color: #fff !important;">TV
                        Shows</a></label>
            </div>
        </div>
    </div>


    {{-- <div class="row p-3 d-flex justify-content-center align-items-center">
        <div class="col-6">
            <div class="slider-button">
                <a href="{{ url('/movies') }}" class="btn-style-hm4 animated" style="font-size: 0.9rem">Movies</a>
            </div>
        </div>
        <div class="col-6">
            <div class="slider-button">
                <a href="{{ url('/tv') }}" class="btn-style-hm4 animated" style="font-size: 0.9rem">TV Shows</a>
            </div>
        </div>
    </div> --}}

</div>






{{-- <div class="movie-list section-padding-lr section-pt-50 bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-center">
                    <div class="create-membership-wrap">
                        <form action="{{ url('/search/') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input placeholder="Type movie or show name..." name="input" type="text"
                                autocomplete="off">
                            <input class="landing-btn-style-search" type="submit" value="Search"></input>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-6">
                        <div class="slider-button">
                            <a href="{{ url('/movies') }}" class="btn-style-hm4 animated">Movies</a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="slider-button">
                            <a href="{{ url('/tv') }}" class="btn-style-hm4 animated">TV Shows</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}




{{-- <div class="hero-landing-area" style="background-image:url(assets/images/bg/bg-4.jpg);">
    <div class="container">
        <div class="landing-hero-content text-center">
            <h1 class="title">Endless movies, TV shows, and more.</h1>
            <h4 class="sub-title">Enjoy anywhere. Unsubscribe anytime.</h4>
            <p>Ready to watch? Enter your email to create or restart your membership.</p>
            <div class="create-membership-wrap">
                <input placeholder="Email Address">
                <button class="landing-btn-style" type="button">Get Started</button> 
            </div>
        </div>
    </div>
</div> --}}
