@extends('layout')


@section('content')
    @include('includes/main_slider')

    <div class="" id="list_tvs"></div>

    {{-- <div class="movie-list section-padding-lr section-ptb-50 bg-black">
        <div class="container-fluid">
            <div class="section-title-4 st-border-bottom">
                <h2>New Discover</h2>
            </div>
            <div class="movie-slider-active nav-style-2 discover_media_list">
            </div>
        </div>
    </div> --}}

    <script>
        setTimeout(() => {
            update_tvs_list();
            // update_list_trending_media('day');
            // update_list_popular_media('movie');
            // update_list_discover_media('movie');
            // update_list_top_rated_media('movie');
            // update_list_now_playing_media('movie');
            // // update_list_trailers('all');
        }, 100);

        function resetSlider() {
            // $('.movie-slider-active').slick('unslick'); /* ONLY remove the classes and handlers added on initialize */
            $('.movie-slider-active').slick(tvSliderRestart('slider')); /* Initialize the slick again */
        }

        function resetBannerSlider() {
            $('.hero-slider-four').slick('unslick'); /* ONLY remove the classes and handlers added on initialize */
            $('.hero-slider-four').slick(tvSliderRestart('banner')); /* Initialize the slick again */
        }

        function tvSliderRestart(type) {
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
                                slidesToShow: 1,
                            }
                        }
                    ]
                }
            }
        }

        function update_tvs_list() {
            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/genres_wise_tv',
                data: {
                    'action': 'genres_wise_tv_list'
                },
                success: function(response) {
                    let res = JSON.parse(response);
                    // console.log(res);
                    $("#list_tvs").html("")
                    let list_tvsHtml = ``;
                    let sliderImageHtml = ``;
                    for (let r = 0; r < res.tvs_lists.length; r++) {

                        list_tvsHtml += `<div class="movie-list section-padding-lr section-ptb-50 bg-black">
                                                <div class="container-fluid">
                                                    <div class="section-title-4 st-border-bottom">
                                                        <h2>` + res.genres[r].name + `</h2>
                                                    </div>
                                                    <div class="movie-slider-active nav-style-2 ` + res.genres[r]
                            .name + `_tv_list">`;

                        for (let a = 0; a < res.tvs_lists[r].length; a++) {
                            list_tvsHtml += `<div class="movie-wrap-plr">`;
                            list_tvsHtml += `<div class="movie-wrap text-center">`;
                            list_tvsHtml += `<div class="movie-img">`;
                            list_tvsHtml += `<a href="/detail/tv/` + res.tvs_lists[r][a].id + `">`;
                            list_tvsHtml += `<img src="{{ env('POSTER_URL') }}` + res.tvs_lists[r][a]
                                .poster_path +
                                `" alt="">`;
                            list_tvsHtml += `</a>`;
                            // list_tvsHtml +=
                            //     `<button title="Watchlist" class="Watch-list-btn" type="button">`;
                            // list_tvsHtml += `<i class="zmdi zmdi-plus"></i>`;
                            // list_tvsHtml += `</button>`;
                            list_tvsHtml += `</div>`;
                            list_tvsHtml += `<div class="movie-content">`;
                            list_tvsHtml += `<h3 class="title">`;
                            list_tvsHtml += `<a href="/detail/tv/` + res.tvs_lists[r][a].id +
                                `">` + ((res.tvs_lists[r][a].title) ? res.tvs_lists[r][a].title : res
                                    .tvs_lists[r][a].name) + `</a>`;
                            list_tvsHtml += `</h3>`;
                            list_tvsHtml += `<span>Quality : HD</span>`;
                            list_tvsHtml += `<div class="movie-btn">`;
                            list_tvsHtml += `<a href="/detail/tv/` + res.tvs_lists[r][a].id + `"
                                            class="btn-style-hm4-2 animated">Details</a>`;
                            list_tvsHtml += `</div>`;
                            list_tvsHtml += `</div>`;
                            list_tvsHtml += `</div>`;
                            list_tvsHtml += `</div>`;

                            if (a < 2) {
                                sliderImageHtml +=
                                    `<div class="single-hero-slider-wrap single-animation-wrap slider-height-hm4 bg-image-hm4 slider-bg-color-black d-flex align-items-center slider-bg-position-1 bg-black" style="background-image:url({{ env('THUMBNAIL_URL') }}` +
                                    res.tvs_lists[r][a].backdrop_path + `);background-position:top;background-size:cover;background-repeat:no-repeat;">
                                                    <div class="slider-content-hm4 slider-animated">
                                                        <h1 class="title animated">` + ((res.tvs_lists[r][a].title) ? res.tvs_lists[r][a].title :
                                        res.tvs_lists[r][a].name) + `</h1>
                                                        <!-- <div class="sub-title-time-wrap">
                                                            <span class="sub-title animated">Feel Good</span>
                                                            <span class="time animated">45 Mins</span>
                                                        </div> -->
                                                        <div class="slider-button mt-3">
                                                            <a href="/detail/tv/` + res.tvs_lists[r][a].id + `" class="btn-style-hm4 animated">Details</a>
                                                        </div>
                                                    </div>
                                                </div>`;
                            }
                        }

                        list_tvsHtml += `</div>
                                                </div>
                                            </div>`;

                    }

                    $("#list_tvs").html(list_tvsHtml);
                    $(".slider_image_list").html(sliderImageHtml);

                    resetSlider();
                    resetBannerSlider();
                    // update_trailers(trailer_details);
                    // update_trending_list();
                },
            });
        }
    </script>
@endsection
