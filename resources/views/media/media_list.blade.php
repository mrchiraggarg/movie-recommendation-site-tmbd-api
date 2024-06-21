@extends('layout')


@section('content')
    @include('includes/main_slider')
    <div class="movie-list section-padding-lr section-ptb-50 bg-black">
        <div class="container-fluid">
            <div class="section-title-4 st-border-bottom">
                <h2>Trending</h2>
            </div>
            <div class="m-4">
                <div class="btn-group choose-toggler">
                    {{-- <input type="checkbox" class="btn-check" name="trending" id="trending_day" value="day"
                        autocomplete="off" checked> --}}
                    <label class="btn btn-outline-primary list_trending_media active" data-value="day"
                        for="trending_day">Today</label>

                    {{-- <input type="checkbox" class="btn-check" name="trending" id="trending_week"
                        value="week" autocomplete="off"> --}}
                    <label class="btn btn-outline-primary list_trending_media" data-value="week" for="trending_week">This
                        Week</label>
                </div>
            </div>
            <div class="movie-slider-active nav-style-2 trending_media_list">
            </div>
        </div>
    </div>

    <!--
                                                                                                    <div class="slider-area section-ptb-50 bg-black">
                                                                                                        <div class="container-fluid p-0">
                                                                                                            <div class="row">
                                                                                                                <div class="col-12">
                                                                                                                    <div class="d-flex flex-wrap mx-auto">
                                                                                                                        <div class="col-12 player mb-4">
                                                                                                                            <div class="embed-responsive embed-responsive-16by9">
                                                                                                                                <iframe id="player" class="embed-responsive-item media_trailer_video" frameborder="0"
                                                                                                                                    width="560" height="315" src=""
                                                                                                                                    allow="autoplay; clipboard-write; encrypted-media" allowfullscreen></iframe>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-12 text-center playlist">
                                                                                                                            <div class="row trailers_list nav-style-3 nav-style-3-edited">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            {{-- <div class="hero-slider-four-new dot-style-1 nav-style-1 list_trailers">
                <div class="single-hero-slider-wrap single-animation-wrap slider-height-hm4 bg-image-hm4 slider-bg-color-black d-flex align-items-center hero-overly slider-bg-position-2 bg-black"
                    style="background-image:url(assets/images/slider/slider-hm4-3.png);">
                    <div class="slider-content-hm4 slider-animated">
                        <h1 class="title animated">3 in 1 Combo Pack</h1>
                        <div class="combo-pack-price">
                            <span class="new-price animated">200TK</span>
                            <span class="old-price animated">350TK</span>
                        </div>
                        <div class="slider-button">
                            <a href="movie-details.html" class="btn-style-hm4 animated">Details</a>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider-wrap single-animation-wrap slider-height-hm4 bg-image-hm4 slider-bg-color-black d-flex align-items-center hero-overly slider-bg-position-2 bg-black"
                    style="background-image:url(assets/images/slider/slider-hm4-4.png);">
                    <div class="slider-content-hm4 slider-animated">
                        <h1 class="title animated">5 in 1 Combo Pack</h1>
                        <div class="combo-pack-price">
                            <span class="new-price animated">450TK</span>
                            <span class="old-price animated">500TK</span>
                        </div>
                        <div class="slider-button">
                            <a href="movie-details.html" class="btn-style-hm4 animated">Details</a>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider-wrap single-animation-wrap slider-height-hm4 bg-image-hm4 slider-bg-color-black d-flex align-items-center hero-overly slider-bg-position-2 bg-black"
                    style="background-image:url(assets/images/slider/slider-hm4-3.png);">
                    <div class="slider-content-hm4 slider-animated">
                        <h1 class="title animated">3 in 1 Combo Pack</h1>
                        <div class="combo-pack-price">
                            <span class="new-price animated">200TK</span>
                            <span class="old-price animated">350TK</span>
                        </div>
                        <div class="slider-button">
                            <a href="movie-details.html" class="btn-style-hm4 animated">Details</a>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider-wrap single-animation-wrap slider-height-hm4 bg-image-hm4 slider-bg-color-black d-flex align-items-center hero-overly slider-bg-position-2 bg-black"
                    style="background-image:url(assets/images/slider/slider-hm4-4.png);">
                    <div class="slider-content-hm4 slider-animated">
                        <h1 class="title animated">5 in 1 Combo Pack</h1>
                        <div class="combo-pack-price">
                            <span class="new-price animated">450TK</span>
                            <span class="old-price animated">500TK</span>
                        </div>
                        <div class="slider-button">
                            <a href="movie-details.html" class="btn-style-hm4 animated">Details</a>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider-wrap single-animation-wrap slider-height-hm4 bg-image-hm4 slider-bg-color-black d-flex align-items-center hero-overly slider-bg-position-2 bg-black"
                    style="background-image:url(assets/images/slider/slider-hm4-3.png);">
                    <div class="slider-content-hm4 slider-animated">
                        <h1 class="title animated">3 in 1 Combo Pack</h1>
                        <div class="combo-pack-price">
                            <span class="new-price animated">200TK</span>
                            <span class="old-price animated">350TK</span>
                        </div>
                        <div class="slider-button">
                            <a href="movie-details.html" class="btn-style-hm4 animated">Details</a>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider-wrap single-animation-wrap slider-height-hm4 bg-image-hm4 slider-bg-color-black d-flex align-items-center hero-overly slider-bg-position-2 bg-black"
                    style="background-image:url(assets/images/slider/slider-hm4-4.png);">
                    <div class="slider-content-hm4 slider-animated">
                        <h1 class="title animated">5 in 1 Combo Pack</h1>
                        <div class="combo-pack-price">
                            <span class="new-price animated">450TK</span>
                            <span class="old-price animated">500TK</span>
                        </div>
                        <div class="slider-button">
                            <a href="movie-details.html" class="btn-style-hm4 animated">Details</a>
                        </div>
                    </div>
                </div>
            </div> --}}
                                                                                                        </div>
                                                                                                    </div>
                                                                                                -->

    <div class="movie-list section-padding-lr section-ptb-50 bg-black">
        <div class="container-fluid">
            <div class="section-title-4 st-border-bottom">
                <h2>Popular</h2>
            </div>
            <div class="m-4">
                <div class="btn-group choose-toggler">
                    {{-- <input type="checkbox" class="btn-check" name="popular" id="popular_movie"
                        value="movie" autocomplete="off" checked> --}}
                    <label class="btn btn-outline-primary list_popular_media active" data-value="movie"
                        for="popular_movie">Movie</label>

                    {{-- <input type="checkbox" class="btn-check" name="popular" id="popular_tv"
                        value="tv" autocomplete="off"> --}}
                    <label class="btn btn-outline-primary list_popular_media" data-value="tv" for="popular_tv">TV</label>
                </div>
            </div>
            <div class="movie-slider-active nav-style-2 popular_media_list">
            </div>
        </div>
    </div>

    <div class="movie-list section-padding-lr section-ptb-50 bg-black">
        <div class="container-fluid">
            <div class="section-title-4 st-border-bottom">
                <h2>New Discover</h2>
            </div>
            <div class="m-4">
                <div class="btn-group choose-toggler">
                    {{-- <input type="checkbox" class="btn-check" name="discover" id="discover_movie"
                        value="movie" autocomplete="off" checked> --}}
                    <label class="btn btn-outline-primary list_discover_media active" data-value="movie"
                        for="discover_movie">Movie</label>

                    {{-- <input type="checkbox" class="btn-check" name="discover" id="discover_tv"
                        value="tv" autocomplete="off"> --}}
                    <label class="btn btn-outline-primary list_discover_media" data-value="tv" for="discover_tv">TV</label>
                </div>
            </div>
            <div class="movie-slider-active nav-style-2 discover_media_list">
            </div>
        </div>
    </div>

    <div class="movie-list section-padding-lr section-ptb-50 bg-black">
        <div class="container-fluid">
            <div class="section-title-4 st-border-bottom">
                <h2>Top Rated</h2>
            </div>
            <div class="m-4">
                <div class="btn-group choose-toggler">
                    {{-- <input type="checkbox" class="btn-check" name="top_rated" id="top_rated_movie"
                        value="movie" autocomplete="off" checked> --}}
                    <label class="btn btn-outline-primary list_top_rated_media active" data-value="movie"
                        for="top_rated_movie">Movie</label>

                    {{-- <input type="checkbox" class="btn-check" name="top_rated" id="top_rated_tv"
                        value="tv" autocomplete="off"> --}}
                    <label class="btn btn-outline-primary list_top_rated_media" data-value="tv"
                        for="top_rated_tv">TV</label>
                </div>
            </div>
            <div class="movie-slider-active nav-style-2 top_rated_media_list">
            </div>
        </div>
    </div>

    <div class="movie-list section-padding-lr section-ptb-50 bg-black">
        <div class="container-fluid">
            <div class="section-title-4 st-border-bottom">
                <h2>Now Playing</h2>
            </div>
            <div class="m-4">
                <div class="btn-group choose-toggler">
                    {{-- <input type="checkbox" class="btn-check" name="now_playing" id="now_playing_movie"
                        value="movie" autocomplete="off" checked> --}}
                    <label class="btn btn-outline-primary list_now_playing_media active" data-value="movie"
                        for="now_playing_movie">Movie</label>

                    {{-- <input type="checkbox" class="btn-check" name="now_playing" id="now_playing_tv"
                        value="tv" autocomplete="off"> --}}
                    <label class="btn btn-outline-primary list_now_playing_media" data-value="tv"
                        for="now_playing_tv">TV</label>
                </div>
            </div>
            <div class="movie-slider-active nav-style-2 now_playing_media_list">
            </div>
        </div>
    </div>



    <script>
        setTimeout(() => {
            update_list_trending_media('day');
            update_list_popular_media('movie');
            update_list_discover_media('movie');
            update_list_top_rated_media('movie');
            update_list_now_playing_media('movie');
            // update_list_trailers('all');
        }, 100);

        function resetSlider() {
            $('.movie-slider-active').slick('unslick'); /* ONLY remove the classes and handlers added on initialize */
            $('.movie-slider-active').slick(movieSliderRestart('slider')); /* Initialize the slick again */
        }

        function resetBannerSlider() {
            $('.hero-slider-four').slick('unslick'); /* ONLY remove the classes and handlers added on initialize */
            $('.hero-slider-four').slick(movieSliderRestart('banner')); /* Initialize the slick again */
        }

        function movieSliderRestart(type) {
            if (type == 'banner') {
                return {
                    arrows: true,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    dots: false,
                    pauseOnFocus: false,
                    pauseOnHover: false,
                    fade: true,
                    infinite: true,
                    slidesToShow: 1,
                    prevArrow: '<button type="button" class="slick-prev"><i class="zmdi zmdi-chevron-left"></i> </button>',
                    nextArrow: '<button type="button" class="slick-next"><i class="zmdi zmdi-chevron-right"></i></button>',
                    responsive: [{
                        breakpoint: 767,
                        settings: {
                            dots: false,
                        }
                    }]
                };
            } else if (type == 'slider') {
                return {
                    dots: false,
                    infinite: true,
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    prevArrow: '<button type="button" class="slick-prev"><i class="zmdi zmdi-chevron-left"></i> </button>',
                    nextArrow: '<button type="button" class="slick-next"><i class="zmdi zmdi-chevron-right"></i></button>',
                    responsive: [{
                            breakpoint: 1365,
                            settings: {
                                slidesToShow: 5,
                            }
                        },
                        {
                            breakpoint: 1199,
                            settings: {
                                slidesToShow: 4,
                            }
                        },
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 3,
                            }
                        },
                        {
                            breakpoint: 767,
                            settings: {
                                slidesToShow: 2,
                            }
                        },
                        {
                            breakpoint: 479,
                            settings: {
                                slidesToShow: 2,
                            }
                        }
                    ]
                }
            }
        }

        function update_trending_list() {
            $(".list_trending_media").unbind().click(function() {
                $(".list_trending_media").removeClass("active");
                $(this).addClass("active");
                update_list_trending_media($(this).attr('data-value'));
            });
        }

        function update_list_trending_media(period_type) {
            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/trending/' + period_type,
                data: {
                    'action': 'trending_media_list'
                },
                success: function(response) {
                    let res = JSON.parse(response);
                    // console.log(res);
                    $(".trending_media_list").html("")
                    let trendingMediaHtml = ``;
                    let sliderImageHtml = ``;
                    // let trailer_details = [];
                    for (let r = 0; r < res.length; r++) {

                        trendingMediaHtml += `<div class="movie-wrap-plr">`;
                        trendingMediaHtml += `<div class="movie-wrap text-center">`;
                        trendingMediaHtml += `<div class="movie-img">`;
                        trendingMediaHtml += `<a href="/detail/` + res[r].media_type + `/` + res[r].id + `">`;
                        trendingMediaHtml += `<img src="{{ env('POSTER_URL') }}` + res[r].poster_path +
                            `" alt="">`;
                        trendingMediaHtml += `</a>`;
                        // trendingMediaHtml +=
                        //     `<button title="Watchlist" class="Watch-list-btn" type="button">`;
                        // trendingMediaHtml += `<i class="zmdi zmdi-plus"></i>`;
                        // trendingMediaHtml += `</button>`;
                        trendingMediaHtml += `</div>`;
                        trendingMediaHtml += `<div class="movie-content">`;
                        trendingMediaHtml += `<h3 class="title">`;
                        trendingMediaHtml += `<a href="/detail/` + res[r].media_type + `/` + res[r].id +
                            `">` + ((res[r].title) ? res[r].title : res[r].name) + `</a>`;
                        trendingMediaHtml += `</h3>`;
                        trendingMediaHtml += `<span>Quality : HD</span>`;
                        trendingMediaHtml += `<div class="movie-btn">`;
                        trendingMediaHtml += `<a href="/detail/` + res[r].media_type + `/` + res[r].id + `"
                                            class="btn-style-hm4-2 animated">Details</a>`;
                        trendingMediaHtml += `</div>`;
                        trendingMediaHtml += `</div>`;
                        trendingMediaHtml += `</div>`;
                        trendingMediaHtml += `</div>`;

                        if (r < 9) {
                            sliderImageHtml +=
                            
                            `<div class="single-hero-slider-wrap single-animation-wrap slider-height-hm4 bg-image-hm4 slider-bg-color-black d-flex align-items-center slider-bg-position-1 bg-black" style="background-image:url({{ env('THUMBNAIL_URL') }}` +
                                    res[r].backdrop_path + `);background-position:top;background-size:cover;background-repeat:no-repeat;">
                                                    <div class="slider-content-hm4 slider-animated">
                                                        <h1 class="title animated">` + ((res[r].title) ? res[r].title :
                                        res[r].name) + `</h1>
                                                        <!-- <div class="sub-title-time-wrap">
                                                            <span class="sub-title animated">Feel Good</span>
                                                            <span class="time animated">45 Mins</span>
                                                        </div> -->
                                                        <div class="slider-button mt-3">
                                                            <a href="/detail/movie/` + res[r].id + `" class="btn-style-hm4 animated">Details</a>
                                                        </div>
                                                    </div>
                                                </div>`;

                                // `<div class="hero-landing-area single-hero-slider-wrap single-animation-wrap slider-height-hm4 bg-image-hm4 slider-bg-color-black d-flex align-items-center justify-content-center slider-bg-position-1 bg-black" style="background-image:url({{ env('THUMBNAIL_URL') }}` +
                                // res[r].backdrop_path + `);background-position:top;background-size:cover;background-repeat:no-repeat;">
                                //                     <div class="slider-content-hm4 slider-animated">
                                //                         <div class="container">
                                //                             <div class="landing-hero-content text-center">
                                //                                 <h1 class="title">Endless movies, TV shows, and more.</h1>
                                //                                 <h4 class="sub-title">Enjoy anywhere anytime.</h4>
                                //                                 <div class="create-membership-wrap">
                                //                                     <form action="{{ url('/search/') }}" method="POST">
                                //                                         <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                //                                         <input placeholder="Type movie or show name..." name="input" type="text" autocomplete="off">
                                //                                         <input class="landing-btn-style-search" type="button" value="Search"></input>
                                //                                     </form>
                                //                                 </div>
                                //                             </div>
                                //                         </div>
                                                        
                                //                         <!-- <h1 class="title animated">` + ((res[r].title) ? res[r]
                                //     .title :
                                //     res[r].name) + `</h1>
                                //                         <div class="sub-title-time-wrap">
                                //                             <span class="sub-title animated">Feel Good</span>
                                //                             <span class="time animated">45 Mins</span>
                                //                         </div> 
                                //                         <div class="slider-button mt-3">
                                //                             <a href="/detail/` + res[r].media_type + `/` + res[r].id + `" class="btn-style-hm4 animated">Details</a>
                                //                         </div> -->
                                //                     </div>
                                //                 </div>`;
                            // slider_image_details.push({
                            //     'id': res[r].id,
                            //     'title': res[r].title,
                            //     'media_type': res[r].media_type,
                            //     'backdrop': res[r].backdrop_path
                            // })
                        }

                        // trailer_details.push({
                        //     'id': res[r].id,
                        //     'title': res[r].title,
                        //     'media_type': res[r].media_type,
                        //     'backdrop': res[r].backdrop_path
                        // })

                    }

                    $(".trending_media_list").html(trendingMediaHtml);
                    $(".slider_image_list").html(sliderImageHtml);
                    resetSlider();
                    resetBannerSlider();
                    update_trending_list();
                    // update_trailers(trailer_details);
                },
            });
        }

        // function update_trailers(res) {
        //     console.log(res)
        //     if (res) {
        //         if (res.length > 0) {
        //             $.ajax({
        //                 type: 'POST',
        //                 headers: {
        //                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //                 },
        //                 url: '/discover/' + media_type,
        //                 data: {
        //                     'action': 'discover_media_list'
        //                 },
        //                 success: function(response) {
        //                     let res = JSON.parse(response);
        //                     $(".media_trailer_video").attr("src", "https://www.youtube.com/embed/" + res[0].backdrop_path +
        //                         "?version=3&autoplay=0&rel=0&showinfo=0&autohide=1");
        //                 }
        //             });

        //             trailerListHtml = ``;
        //             for (let r = 0; r < res.length; r++) {
        //                 trailerListHtml += `<a class="col-6 mb-3 play_trailer" data-id="` + res[r].id +
        //                     `" data-media-type="` + res[r].media_type + `" data-autoplay="1" href="javascript:void(0)">
    //                 <img class="img-fluid w-100" src="{{ env('THUMBNAIL_URL') }}` + res[r].backdrop_path + `"
    //                     alt="" />
    //             </a>`;

        //             }
        //             $(".trailers_list").html(trailerListHtml);
        //         }
        //     }
        // }

        function update_popular_list() {
            $(".list_popular_media").unbind().click(function() {
                $(".list_popular_media").removeClass("active");
                $(this).addClass("active");
                update_list_popular_media($(this).attr('data-value'));
            });
        }

        function update_list_popular_media(media_type) {
            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/popular/' + media_type,
                data: {
                    'action': 'popular_media_list'
                },
                success: function(response) {
                    let res = JSON.parse(response);
                    // console.log(res);
                    $(".popular_media_list").html("")
                    let popularMediaHtml = ``;
                    for (let r = 0; r < res.length; r++) {

                        popularMediaHtml += `<div class="movie-wrap-plr">`;
                        popularMediaHtml += `<div class="movie-wrap text-center">`;
                        popularMediaHtml += `<div class="movie-img">`;
                        popularMediaHtml += `<a href="/detail/` + media_type + `/` + res[r].id + `">`;
                        popularMediaHtml += `<img src="{{ env('POSTER_URL') }}` + res[r].poster_path +
                            `" alt="">`;
                        popularMediaHtml += `</a>`;
                        // popularMediaHtml +=
                        //     `<button title="Watchlist" class="Watch-list-btn" type="button">`;
                        // popularMediaHtml += `<i class="zmdi zmdi-plus"></i>`;
                        // popularMediaHtml += `</button>`;
                        popularMediaHtml += `</div>`;
                        popularMediaHtml += `<div class="movie-content">`;
                        popularMediaHtml += `<h3 class="title">`;
                        popularMediaHtml += `<a href="/detail/` + media_type + `/` + res[r].id +
                            `">` + ((res[r].title) ? res[r].title : res[r].name) + `</a>`;
                        popularMediaHtml += `</h3>`;
                        popularMediaHtml += `<span>Quality : HD</span>`;
                        popularMediaHtml += `<div class="movie-btn">`;
                        popularMediaHtml += `<a href="/detail/` + media_type + `/` + res[r].id + `"
                                            class="btn-style-hm4-2 animated">Details</a>`;
                        popularMediaHtml += `</div>`;
                        popularMediaHtml += `</div>`;
                        popularMediaHtml += `</div>`;
                        popularMediaHtml += `</div>`;

                    }

                    $(".popular_media_list").html(popularMediaHtml);
                    resetSlider();
                    update_popular_list();
                },
            });
        }

        function update_discover_list() {
            $(".list_discover_media").unbind().click(function() {
                $(".list_discover_media").removeClass("active");
                $(this).addClass("active");
                update_list_discover_media($(this).attr('data-value'));
            });
        }

        function update_list_discover_media(media_type) {
            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/discover/' + media_type,
                data: {
                    'action': 'discover_media_list'
                },
                success: function(response) {
                    let res = JSON.parse(response);
                    // console.log(res);
                    $(".discover_media_list").html("")
                    let discoverMediaHtml = ``;
                    for (let r = 0; r < res.length; r++) {

                        discoverMediaHtml += `<div class="movie-wrap-plr">`;
                        discoverMediaHtml += `<div class="movie-wrap text-center">`;
                        discoverMediaHtml += `<div class="movie-img">`;
                        discoverMediaHtml += `<a href="/detail/` + media_type + `/` + res[r].id + `">`;
                        discoverMediaHtml += `<img src="{{ env('POSTER_URL') }}` + res[r].poster_path +
                            `" alt="">`;
                        discoverMediaHtml += `</a>`;
                        // discoverMediaHtml +=
                        //     `<button title="Watchlist" class="Watch-list-btn" type="button">`;
                        // discoverMediaHtml += `<i class="zmdi zmdi-plus"></i>`;
                        // discoverMediaHtml += `</button>`;
                        discoverMediaHtml += `</div>`;
                        discoverMediaHtml += `<div class="movie-content">`;
                        discoverMediaHtml += `<h3 class="title">`;
                        discoverMediaHtml += `<a href="/detail/` + media_type + `/` + res[r].id +
                            `">` + ((res[r].title) ? res[r].title : res[r].name) + `</a>`;
                        discoverMediaHtml += `</h3>`;
                        discoverMediaHtml += `<span>Quality : HD</span>`;
                        discoverMediaHtml += `<div class="movie-btn">`;
                        discoverMediaHtml += `<a href="/detail/` + media_type + `/` + res[r].id + `"
                                            class="btn-style-hm4-2 animated">Details</a>`;
                        discoverMediaHtml += `</div>`;
                        discoverMediaHtml += `</div>`;
                        discoverMediaHtml += `</div>`;
                        discoverMediaHtml += `</div>`;

                    }

                    $(".discover_media_list").html(discoverMediaHtml);
                    resetSlider();
                    update_discover_list();
                },
            });
        }

        function update_top_rated_list() {
            $(".list_top_rated_media").unbind().click(function() {
                $(".list_top_rated_media").removeClass("active");
                $(this).addClass("active");
                update_list_top_rated_media($(this).attr('data-value'));
            });
        }

        function update_list_top_rated_media(media_type) {
            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/top_rated/' + media_type,
                data: {
                    'action': 'top_rated_media_list'
                },
                success: function(response) {
                    let res = JSON.parse(response);
                    // console.log(res);
                    $(".top_rated_media_list").html("")
                    let top_ratedMediaHtml = ``;
                    for (let r = 0; r < res.length; r++) {

                        top_ratedMediaHtml += `<div class="movie-wrap-plr">`;
                        top_ratedMediaHtml += `<div class="movie-wrap text-center">`;
                        top_ratedMediaHtml += `<div class="movie-img">`;
                        top_ratedMediaHtml += `<a href="/detail/` + media_type + `/` + res[r].id + `">`;
                        top_ratedMediaHtml += `<img src="{{ env('POSTER_URL') }}` + res[r].poster_path +
                            `" alt="">`;
                        top_ratedMediaHtml += `</a>`;
                        // top_ratedMediaHtml +=
                        //     `<button title="Watchlist" class="Watch-list-btn" type="button">`;
                        // top_ratedMediaHtml += `<i class="zmdi zmdi-plus"></i>`;
                        // top_ratedMediaHtml += `</button>`;
                        top_ratedMediaHtml += `</div>`;
                        top_ratedMediaHtml += `<div class="movie-content">`;
                        top_ratedMediaHtml += `<h3 class="title">`;
                        top_ratedMediaHtml += `<a href="/detail/` + media_type + `/` + res[r].id +
                            `">` + ((res[r].title) ? res[r].title : res[r].name) + `</a>`;
                        top_ratedMediaHtml += `</h3>`;
                        top_ratedMediaHtml += `<span>Quality : HD</span>`;
                        top_ratedMediaHtml += `<div class="movie-btn">`;
                        top_ratedMediaHtml += `<a href="/detail/` + media_type + `/` + res[r].id + `"
                                            class="btn-style-hm4-2 animated">Details</a>`;
                        top_ratedMediaHtml += `</div>`;
                        top_ratedMediaHtml += `</div>`;
                        top_ratedMediaHtml += `</div>`;
                        top_ratedMediaHtml += `</div>`;

                    }

                    $(".top_rated_media_list").html(top_ratedMediaHtml);
                    resetSlider();
                    update_top_rated_list();
                },
            });
        }

        function update_now_playing_list() {
            $(".list_now_playing_media").unbind().click(function() {
                $(".list_now_playing_media").removeClass("active");
                $(this).addClass("active");
                update_list_now_playing_media($(this).attr('data-value'));
            });
        }

        function update_list_now_playing_media(media_type) {
            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/now_playing/' + media_type,
                data: {
                    'action': 'now_playing_media_list'
                },
                success: function(response) {
                    let res = JSON.parse(response);
                    // console.log(res);
                    $(".now_playing_media_list").html("")
                    let now_playingMediaHtml = ``;
                    for (let r = 0; r < res.length; r++) {

                        now_playingMediaHtml += `<div class="movie-wrap-plr">`;
                        now_playingMediaHtml += `<div class="movie-wrap text-center">`;
                        now_playingMediaHtml += `<div class="movie-img">`;
                        now_playingMediaHtml += `<a href="/detail/` + media_type + `/` + res[r].id + `">`;
                        now_playingMediaHtml += `<img src="{{ env('POSTER_URL') }}` + res[r].poster_path +
                            `" alt="">`;
                        now_playingMediaHtml += `</a>`;
                        // now_playingMediaHtml +=
                        //     `<button title="Watchlist" class="Watch-list-btn" type="button">`;
                        // now_playingMediaHtml += `<i class="zmdi zmdi-plus"></i>`;
                        // now_playingMediaHtml += `</button>`;
                        now_playingMediaHtml += `</div>`;
                        now_playingMediaHtml += `<div class="movie-content">`;
                        now_playingMediaHtml += `<h3 class="title">`;
                        now_playingMediaHtml += `<a href="/detail/` + media_type + `/` + res[r].id +
                            `">` + ((res[r].title) ? res[r].title : res[r].name) + `</a>`;
                        now_playingMediaHtml += `</h3>`;
                        now_playingMediaHtml += `<span>Quality : HD</span>`;
                        now_playingMediaHtml += `<div class="movie-btn">`;
                        now_playingMediaHtml += `<a href="/detail/` + media_type + `/` + res[r].id + `"
                                            class="btn-style-hm4-2 animated">Details</a>`;
                        now_playingMediaHtml += `</div>`;
                        now_playingMediaHtml += `</div>`;
                        now_playingMediaHtml += `</div>`;
                        now_playingMediaHtml += `</div>`;

                    }

                    $(".now_playing_media_list").html(now_playingMediaHtml);
                    resetSlider();
                    update_now_playing_list();
                },
            });
        }

        // function update_list_trailers(media_type) {
        //     $.ajax({
        //         type: 'POST',
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         },
        //         url: '/trailers/' + media_type,
        //         data: {
        //             'action': 'trailers_list'
        //         },
        //         success: function(response) {
        //             let res = JSON.parse(response);
        //             // console.log(res);
        //             $(".popular_media_list").html("")
        //             let popularMediaHtml = ``;
        //             for (let r = 0; r < res.length; r++) {

        //                 popularMediaHtml += `<div class="movie-wrap-plr">`;
        //                 popularMediaHtml += `<div class="movie-wrap text-center">`;
        //                 popularMediaHtml += `<div class="movie-img">`;
        //                 popularMediaHtml += `<a href="/detail/` + media_type + `/` + res[r].id + `">`;
        //                 popularMediaHtml += `<img src="{{ env('POSTER_URL') }}` + res[r].poster_path +
        //                     `" alt="">`;
        //                 popularMediaHtml += `</a>`;
        //                 popularMediaHtml +=
        //                     `<button title="Watchlist" class="Watch-list-btn" type="button">`;
        //                 popularMediaHtml += `<i class="zmdi zmdi-plus"></i>`;
        //                 popularMediaHtml += `</button>`;
        //                 popularMediaHtml += `</div>`;
        //                 popularMediaHtml += `<div class="movie-content">`;
        //                 popularMediaHtml += `<h3 class="title">`;
        //                 popularMediaHtml += `<a href="/detail/` + media_type + `/` + res[r].id +
        //                     `">` + ((res[r].title) ? res[r].title : res[r].name) + `</a>`;
        //                 popularMediaHtml += `</h3>`;
        //                 popularMediaHtml += `<span>Quality : HD</span>`;
        //                 popularMediaHtml += `<div class="movie-btn">`;
        //                 popularMediaHtml += `<a href="/detail/` + media_type + `/` + res[r].id + `"
    //                                     class="btn-style-hm4-2 animated">Details</a>`;
        //                 popularMediaHtml += `</div>`;
        //                 popularMediaHtml += `</div>`;
        //                 popularMediaHtml += `</div>`;
        //                 popularMediaHtml += `</div>`;

        //             }

        //             $(".popular_media_list").html(popularMediaHtml);
        //             resetSlider();
        //             update_popular_list();
        //         },
        //     });
        // }
    </script>
@endsection
