@extends('layout')


@section('content')
    {{-- @include('includes/main_slider') --}}

    {{-- @include('includes/header_new') --}}
    <style>
        .movie-details-content .movie-details-info table tr td {
            white-space: nowrap;
            width: 1%;
        }

        .movie-details-content .movie-details-info table tr td span {
            font-weight: 500;
            min-width: 85px;
            font-size: 18px;
            display: inline-block;
            margin-right: 10px;
            color: #f4181c;
        }

        .movie-details-content .movie-details-info table tr td strong {
            font-weight: 500;
            min-width: 85px;
            font-size: 18px;
            display: inline-block;
            margin-right: 10px;
            color: #fff;
        }

        .nav-style-3-edited button {
            top: -10px !important;
            z-index: 99;
        }

        .nav-style-1-edited .slick-prev {
            /* top: 80px; */
            /* left: 475px; */
            left: -200px !important;
        }

        .nav-style-1-edited .slick-next {
            /* top: 80px; */
            /* right: -75px; */
            right: -200px !important;
        }

        .make-it-title {
            color: #ffffff;
            line-height: 25px;
            margin: 0 20px 0 0;
            font-size: 35px;
            font-weight: 600;
        }

        .make-it-subtitle {
            color: #ddd;
            margin-right: 20px;
            font-size: 16px;
            letter-spacing: 0.3px;
            display: inline-block;
            line-height: 1;
            position: relative;
        }

        .make-it-heading {
            font-weight: 500;
            min-width: 85px;
            font-size: 18px;
            display: inline-block;
            margin-right: 10px;
            color: #f4181c;
        }

        .movie-details-content .movie-details-info table tr td {
            white-space: normal;
        }
    </style>

    <!-- Breadcrumb -->
    {{-- <div class="breadcrumb-area breadcrumb-modify-padding bg-black-3 py-5">
    </div> --}}
    <div class="breadcrumb-area breadcrumb-modify-padding bg-black-3">
        <div class="container">
            <div class="in-breadcrumb">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumb-style-2">
                            <h2 class="title"></h2>
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list-2">
                                <li><span class="tagline"></span></li>
                                <li><span class="runtime"></span></li>
                                <li><span class="release_year"></span></li>
                                <li><span class="genre_list"></span></li>
                                <li class="active"><span class="age_appropriate"></span></li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb -->
    <div class="movie-details-wrap section-ptb-50 bg-black">
        <div class="container">
            <div class="movie-details-video-content-wrap">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row images_list nav-style-1 nav-style-1-edited">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="movie-details-content">
                            <div class="movie-details-info">
                                <h2 class="title make-it-title"></h2>
                                <div class="tagline make-it-subtitle my-4"></div>
                                <table class="table-responsive">
                                    <tr>
                                        <td><span class="media_status_title">Status:</span><strong
                                                class="media_status"></strong></td>
                                    </tr>
                                    {{-- <tr>
                                        <td></td>
                                    </tr> --}}
                                    <tr>
                                        <td><span class="released_date_title">Released Date:</span><strong
                                                class="released_date"></strong></td>
                                    </tr>
                                    {{-- <tr>
                                        <td></td>
                                    </tr> --}}
                                    <tr>
                                        <td><span class="media_budget_title">Budget:</span><strong
                                                class="media_budget"></strong></td>
                                    </tr>
                                    {{-- <tr>
                                        <td></td>
                                    </tr> --}}
                                    <tr>
                                        <td><span class="media_revenue_title">Revenue:</span><strong
                                                class="media_revenue"></strong></td>
                                    </tr>
                                    <tr>
                                        <td><span class="media_runtime_title">Run Time:</span><strong
                                                class="runtime"></strong></td>
                                    </tr>
                                    <tr>
                                        <td><span class="media_genre_title">Genres:</span><strong
                                                class="genre_list"></strong></td>
                                    </tr>
                                    {{-- <tr>
                                        <td></td>
                                    </tr> --}}
                                    <tr>
                                        <td><span class="media_original_lang_title">Original Language:</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong class="media_original_lang"></strong></td>
                                    </tr>
                                    <tr>
                                        <td><span class="media_keywords_title">Keywords:</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong class="media_keywords"></strong></td>
                                    </tr>
                                </table>
                                {{-- <ul class="mt-3">
                                    <li class="keyword_li"><span class="media_original_lang_title">Original Language:
                                        </span>
                                        <strong class="media_original_lang"></strong>
                                    </li>
                                    <li class="keyword_li"><span>Keywords: </span> <strong class="media_keywords"></strong>
                                    </li> <li><span>Released Date: </span> <strong class="released_date"></strong></li>
                                    <li><span>Budget: </span> <strong class="media_budget"></strong></li>
                                    <li><span>Revenue: </span> <strong class="media_revenue"></strong></li>
                                    <li><span>Original Language: </span> <strong class="media_original_lang"></strong></li>
                                </ul> --}}
                            </div>
                            <span class="make-it-heading">Overview:</span>
                            <p class="media_overview"></p>

                            {{-- <div class="movie-list section-pb-50 bg-black">
                                <div class="container watch_providers_section">
                                </div>
                            </div> --}}
                            <span class="make-it-heading">Available on:</span>


                            <div class="mt-4">
                                <div class="btn-group choose-toggler">
                                    <label class="btn btn-outline-primary change_watch_providers_div initThisMedia active"
                                        data-value="flat" for="flat">Flat</label>
                                    <label class="btn btn-outline-primary change_watch_providers_div" data-value="rent"
                                        for="rent">Rent</label>
                                    <label class="btn btn-outline-primary change_watch_providers_div" data-value="buy"
                                        for="buy">Buy</label>
                                </div>
                            </div>
                            <div style="margin-top: -30px;">
                                <div class="flat_list watch_providers_section nav-style-3"></div>
                                <div class="rent_list watch_providers_section nav-style-3"></div>
                                <div class="buy_list watch_providers_section nav-style-3"></div>
                            </div>


                            {{-- <div class="brand-logo-active brand-logo-wrap watch_providers_section">
                            </div> --}}

                            {{-- <div class="container watch_providers_section">
                            </div> --}}
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
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
                    </div> --}}
                </div>
            </div>

            {{-- <div class="movie-details-content">
                <div class="movie-details-info">
                    <div class="like-share-wrap">
                        <div class="social-share-wrap">
                            <span>Share:</span>
                            <div class="social-style-1">
                                <a class="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a>
                                <a class="pinterest" href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                <a class="linkedin" href="#"><i class="zmdi zmdi-linkedin"></i></a>
                                <a class="instagram" href="#"><i class="zmdi zmdi-instagram"></i></a>
                            </div>
                        </div>
                        <div class="like-dislike-wrap">
                            <button class="like-dislike-style"><i class="zmdi zmdi-thumb-up"></i></button>
                            <button class="like-dislike-style"><i class="zmdi zmdi-thumb-down"></i></button>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <div class="movie-list section-pb-50 bg-black">
        <div class="container">
            <div class="section-title-4 st-border-bottom">
                <h2>Cast & Crew</h2>
            </div>
            <div class="m-4">
                <div class="btn-group choose-toggler">
                    <label class="btn btn-outline-primary change_cast_crew_div initThisMedia active" data-value="cast"
                        for="cast">Cast</label>
                    <label class="btn btn-outline-primary change_cast_crew_div" data-value="crew"
                        for="crew">Crew</label>
                </div>
            </div>
            <div>
                <div class="cast_list cast_crew_list_div nav-style-3"></div>
                <div class="crew_list cast_crew_list_div nav-style-3"></div>
            </div>
        </div>
    </div>

    <div class="movie-list section-pb-50 bg-black">
        <div class="container">
            <div class="section-title-4 st-border-bottom">
                <h2>Media</h2>
            </div>
            <div class="m-4">
                <div class="btn-group choose-toggler">
                    <label class="btn btn-outline-primary change_media_div initThisMedia active" data-value="posters"
                        for="posters">Posters</label>
                    <label class="btn btn-outline-primary change_media_div" data-value="backdrops"
                        for="backdrops">Backdrops</label>
                    <label class="btn btn-outline-primary change_media_div" data-value="videos"
                        for="videos">Videos</label>
                </div>
            </div>
            <div>
                <div class="posters_list media_list_div nav-style-3"></div>
                <div class="backdrops_list media_list_div nav-style-3"></div>
                <div class="videos_list media_list_div nav-style-3"></div>
            </div>
        </div>
    </div>

    <div class="movie-list insert_similar_section section-pb-50 bg-black" style="display:none;">
    </div>
    <div class="movie-list insert_recommended_section section-ptb-50 bg-black-2">
    </div>


    <script>
        setTimeout(() => {
            fns();
        }, 100);

        function resetSlider() {
            // $('.movie-slider-active-3').slick('unslick'); /* ONLY remove the classes and handlers added on initialize */
            $('.movie-slider-active-3').slick(movieSliderRestart('similar')); /* Initialize the slick again */
        }

        function movieSliderRestart(type) {
            if (type == "trailer") {
                return {
                    dots: false,
                    infinite: true,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    // arrows:false,
                    autoplay: true,
                    prevArrow: '<button type="button" class="slick-prev"><i class="zmdi zmdi-chevron-left"></i> </button>',
                    nextArrow: '<button type="button" class="slick-next"><i class="zmdi zmdi-chevron-right"></i></button>',
                    responsive: [{
                            breakpoint: 1200,
                            settings: {
                                slidesToShow: 4,
                            }
                        },
                        {
                            breakpoint: 1199,
                            settings: {
                                slidesToShow: 3,
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
            } else if (type == "cast_crew") {
                return {
                    dots: false,
                    infinite: true,
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    // variableWidth: true,
                    // arrows:false,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    prevArrow: '<button type="button" class="slick-prev"><i class="zmdi zmdi-chevron-left"></i> </button>',
                    nextArrow: '<button type="button" class="slick-next"><i class="zmdi zmdi-chevron-right"></i></button>',
                    responsive: [{
                            breakpoint: 1200,
                            settings: {
                                slidesToShow: 4,
                            }
                        },
                        {
                            breakpoint: 1199,
                            settings: {
                                slidesToShow: 3,
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
            } else if (type == "videos") {
                return {
                    dots: false,
                    infinite: true,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    variableWidth: true,
                    // arrows:false,
                    autoplay: false,
                    // autoplaySpeed: 3000,
                    prevArrow: '<button type="button" class="slick-prev"><i class="zmdi zmdi-chevron-left"></i> </button>',
                    nextArrow: '<button type="button" class="slick-next"><i class="zmdi zmdi-chevron-right"></i></button>',
                    responsive: [{
                            breakpoint: 1200,
                            settings: {
                                slidesToShow: 4,
                            }
                        },
                        {
                            breakpoint: 1199,
                            settings: {
                                slidesToShow: 3,
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
            } else if (type == 'images') {
                return {
                    dots: false,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    prevArrow: '<button type="button" class="slick-prev"><i class="zmdi zmdi-chevron-left"></i> </button>',
                    nextArrow: '<button type="button" class="slick-next"><i class="zmdi zmdi-chevron-right"></i></button>',
                    // responsive: [{
                    //         breakpoint: 1200,
                    //         settings: {
                    //             slidesToShow: 4,
                    //         }
                    //     },
                    //     {
                    //         breakpoint: 1199,
                    //         settings: {
                    //             slidesToShow: 3,
                    //         }
                    //     },
                    //     {
                    //         breakpoint: 992,
                    //         settings: {
                    //             slidesToShow: 3,
                    //         }
                    //     },
                    //     {
                    //         breakpoint: 767,
                    //         settings: {
                    //             slidesToShow: 1,
                    //         }
                    //     },
                    //     {
                    //         breakpoint: 479,
                    //         settings: {
                    //             slidesToShow: 1,
                    //         }
                    //     }
                    // ]
                }
            } else if (type == 'posters') {
                return {
                    dots: false,
                    infinite: true,
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    // arrows:false,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    prevArrow: '<button type="button" class="slick-prev"><i class="zmdi zmdi-chevron-left"></i> </button>',
                    nextArrow: '<button type="button" class="slick-next"><i class="zmdi zmdi-chevron-right"></i></button>',
                    responsive: [{
                            breakpoint: 1200,
                            settings: {
                                slidesToShow: 4,
                            }
                        },
                        {
                            breakpoint: 1199,
                            settings: {
                                slidesToShow: 3,
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
            } else {
                return {
                    dots: false,
                    infinite: true,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    prevArrow: '<button type="button" class="slick-prev"><i class="zmdi zmdi-chevron-left"></i> </button>',
                    nextArrow: '<button type="button" class="slick-next"><i class="zmdi zmdi-chevron-right"></i></button>',
                    responsive: [{
                            breakpoint: 1200,
                            settings: {
                                slidesToShow: 4,
                            }
                        },
                        {
                            breakpoint: 1199,
                            settings: {
                                slidesToShow: 3,
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

        function fns() {
            let media_type = '{{ $media_type }}';
            let media_id = {{ $id }};
            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/detail/' + media_type + '/' + media_id,
                data: {
                    'action': 'media_detail_by_id'
                },
                success: function(response) {
                    let res = JSON.parse(response);
                    console.log(res);

                    // media_type = 'tv'
                    if (media_type == 'movie') {
                        let title = ((res.title) ? res.title : res.name);
                        $(".title").html(title);
                        $(".tagline").html(res.tagline);
                        $(".runtime").html(convertIntoHoursMinutes(res.runtime));
                        let release_year = res.release_date.split("-")[0];
                        $(".release_year").html(release_year);

                        let genre_list = '';
                        for (let r = 0; r < res.genres.length; r++) {
                            genre_list += toTitleCase(res.genres[r].name);
                            if (r < res.genres.length - 1) {
                                genre_list += ', ';
                            }
                        }
                        $(".genre_list").html(genre_list);

                        let age_appropriate = '';
                        if (res.adult) age_appropriate = '18+';
                        else age_appropriate = '13+';
                        $(".age_appropriate").html('U/A ' + age_appropriate);

                        $(".media_trailer_thumbnail").attr('poster', '{{ env('THUMBNAIL_URL') }}' + res
                            .backdrop_path);

                        // if (res.video) {
                        //     $(".media_trailer").attr('src', '');
                        // } else {
                        //     $(".media_trailer").hide();
                        // }

                        // $(".media_trailer").hide();
                        // if (res.videos) {
                        //     // let trailer_link = 'https://www.youtube.com/embed/' + res.videos.results[0].key;
                        //     let trailer_link = 'https://www.themoviedb.org/video/play?key=' + res.videos
                        //         .results[0].key;
                        //     // console.log(trailer_link)
                        //     $(".media_player").attr('src', trailer_link);
                        // }

                        // if (res.videos) {
                        //     if (res.videos.results.length > 0) {
                        //         $(".media_trailer_video").attr("src", "https://www.youtube.com/embed/" + res
                        //             .videos
                        //             .results[0].key + "?version=3&autoplay=0&rel=0&showinfo=0&autohide=1");

                        //         trailerListHtml = ``;
                        //         for (let r = 0; r < res.videos.results.length; r++) {
                        //             // const element = array[r];
                        //             trailerListHtml += `<a class="col-6 mb-3 play_trailer" data-key="` + res
                        //                 .videos.results[r].key + `" data-autoplay="1" href="javascript:void(0)">
                    //                 <img class="img-fluid w-100" src="https://img.youtube.com/vi/` + res.videos
                        //                 .results[r].key + `/0.jpg"
                    //                     alt="" />
                    //                 <!-- <div class="card-body py-2"><small>` + res.videos.results[r].name + `</small></div> -->
                    //             </a>`;

                        //         }
                        //         $(".trailers_list").html(trailerListHtml);
                        //         // $(".media_trailer_video").attr('src', 'https://www.youtube.com/embed/' + res
                        //         //     .videos.results[0].key);
                        //     }
                        // }

                        if (res.videos) {
                            if (res.videos.results.length > 0) {
                                videosListHtml = ``;
                                for (let r = 0; r < res.videos.results.length; r++) {
                                    videosListHtml += `<div class="embed-responsive embed-responsive-16by9">`;
                                    videosListHtml +=
                                        `<iframe id="player" class="embed-responsive-item media_trailer_video" frameborder="0"
                                                                    height="315" src="https://www.youtube.com/embed/` +
                                        res.videos.results[r].key + `?version=3&autoplay=0&rel=0&showinfo=0&autohide=1"
                                                                    allow="autoplay; clipboard-write; encrypted-media" allowfullscreen></iframe>
                                                            </div>`;
                                    videosListHtml += `</div>`;
                                }
                                $(".videos_list").html(videosListHtml);
                                // $(".videos_list").hide();
                                $('.videos_list').slick(movieSliderRestart('videos'));
                            }
                        }

                        if (res.images) {
                            if (res.images.backdrops.length > 0) {
                                backdropsListHtml = ``;
                                for (let r = 0; r < res.images.backdrops.length; r++) {
                                    backdropsListHtml +=
                                        `<div class="embed-responsive embed-responsive-16by9">`;
                                    backdropsListHtml +=
                                        `<img class="img-fluid w-100" src="{{ env('POSTER_URL') }}` + res.images
                                        .backdrops[r].file_path + `" alt="" />`;
                                    backdropsListHtml += `</div>`;
                                }
                                $(".backdrops_list").html(backdropsListHtml);
                                // $(".backdrops_list").hide();
                                $('.backdrops_list').slick(movieSliderRestart('backdrops'));
                            }
                        }

                        if (res.images) {
                            if (res.images.posters.length > 0) {
                                postersListHtml = ``;
                                for (let r = 0; r < res.images.posters.length; r++) {
                                    postersListHtml += `<div class="movie-wrap-plr">`;
                                    postersListHtml += `<div class="movie-wrap text-center">`;
                                    postersListHtml += `<div class="movie-img">`;
                                    postersListHtml += `<a href="javascript:'">`;
                                    postersListHtml +=
                                        `<img src="{{ env('POSTER_URL') }}` + res.images.posters[r].file_path +
                                        `" alt="">`;
                                    postersListHtml += `</a>`;
                                    postersListHtml += `</div>`;
                                    postersListHtml += `</div>`;
                                    postersListHtml += `</div>`;
                                }
                                $(".posters_list").html(postersListHtml);
                                // $(".posters_list").hide();
                                $('.posters_list').slick(movieSliderRestart('posters'));
                            }
                        }

                        // console.log(res.images.posters)

                        if (res.images) {
                            if (res.images.posters.length > 0) {
                                let postersImagesHtml = ``;
                                for (let a = 0; a < res.images.posters.length; a++) {
                                    postersImagesHtml += `<div>
                                                        	<div class="image">
                                                        		<img src="{{ env('THUMBNAIL_URL') }}` + res.images.posters[
                                        a].file_path + `" />
                                                        	</div>
                                                        </div>`;
                                }
                                $(".images_list").html(postersImagesHtml);
                            }
                        }

                        if (res.credits) {
                            if (res.credits.cast.length > 0) {
                                castListHtml = ``;
                                for (let r = 0; r < res.credits.cast.length; r++) {
                                    castListHtml += `<div class="movie-wrap-plr">`;
                                    castListHtml += `<div class="movie-wrap text-center">`;
                                    castListHtml += `<div class="movie-img">`;
                                    castListHtml += `<a href="javascript:;">`;
                                    if (res.credits.cast[r].profile_path) {
                                        castListHtml += `<img src="{{ env('POSTER_URL') }}` + res.credits.cast[
                                                r].profile_path +
                                            `" alt="">`;
                                    } else {
                                        castListHtml +=
                                            `<img src="/assets/images/other/cast_crew_nf.png" style="height:295px" alt="">`;
                                    }
                                    castListHtml += `</a>`;
                                    castListHtml += `</div>`;
                                    castListHtml += `<div class="movie-content">`;
                                    castListHtml += `<h3 class="title">`;
                                    castListHtml += `<a href="javascript:;">` + res.credits.cast[r].name +
                                        `</a>`;
                                    castListHtml += `</h3>`;
                                    castListHtml += `<span>` + res.credits.cast[r].known_for_department +
                                        `</span>`;
                                    // castListHtml += `<span>` + res.credits.cast[r].known_for_department + `</span>`;
                                    castListHtml += `<div class="movie-btn">`;
                                    castListHtml +=
                                        `<a href="javascript:;" class="btn-style-hm4-2 animated">` + res.credits
                                        .cast[r].character + `</a>`;
                                    castListHtml += `</div>`;
                                    castListHtml += `</div>`;
                                    castListHtml += `</div>`;
                                    castListHtml += `</div>`;
                                }
                                $(".cast_list").html(castListHtml);
                                // $(".cast_list").hide();
                                $('.cast_list').slick(movieSliderRestart('cast_crew'));
                            }
                        }


                        if (res.credits) {
                            if (res.credits.crew.length > 0) {
                                crewListHtml = ``;
                                for (let r = 0; r < res.credits.crew.length; r++) {
                                    crewListHtml += `<div class="movie-wrap-plr">`;
                                    crewListHtml += `<div class="movie-wrap text-center">`;
                                    crewListHtml += `<div class="movie-img">`;
                                    crewListHtml += `<a href="javascript:;">`;
                                    if (res.credits.crew[r].profile_path) {
                                        crewListHtml += `<img src="{{ env('POSTER_URL') }}` + res.credits.crew[
                                                r].profile_path +
                                            `" alt="">`;
                                    } else {
                                        crewListHtml +=
                                            `<img src="/assets/images/other/cast_crew_nf.png" style="height:295px" alt="">`;
                                    }
                                    crewListHtml += `</a>`;
                                    crewListHtml += `</div>`;
                                    crewListHtml += `<div class="movie-content">`;
                                    crewListHtml += `<h3 class="title">`;
                                    crewListHtml += `<a href="javascript:;">` + res.credits.crew[r].name +
                                        `</a>`;
                                    crewListHtml += `</h3>`;
                                    crewListHtml += `<span>` + res.credits.crew[r].known_for_department +
                                        `</span>`;
                                    // crewListHtml += `<span>` + res.credits.crew[r].known_for_department + `</span>`;
                                    crewListHtml += `<div class="movie-btn">`;
                                    crewListHtml +=
                                        `<a href="javascript:;" class="btn-style-hm4-2 animated">` + res.credits
                                        .crew[r].job + `</a>`;
                                    crewListHtml += `</div>`;
                                    crewListHtml += `</div>`;
                                    crewListHtml += `</div>`;
                                    crewListHtml += `</div>`;
                                }
                                $(".crew_list").html(crewListHtml);
                                // $(".crew_list").hide();
                                $('.crew_list').slick(movieSliderRestart('cast_crew'));
                            }
                        }

                        $(".media_overview").html(res.overview);
                        $(".media_status").html(res.status);
                        $(".released_date").html(res.release_date.replaceAll("-", "/"));
                        $(".media_budget").html('$' + res.budget);
                        $(".media_revenue").html(res.revenue);

                        let spoken_lang_list = '';
                        for (let r = 0; r < res.spoken_languages.length; r++) {
                            spoken_lang_list += toTitleCase(res.spoken_languages[r].english_name);
                            if (r < res.spoken_languages.length - 1) {
                                spoken_lang_list += ', ';
                            }
                        }

                        $(".media_original_lang").html(spoken_lang_list);

                        let keywords_list = '';
                        for (let r = 0; r < res.keywords.keywords.length; r++) {
                            keywords_list += toTitleCase(res.keywords.keywords[r].name);
                            if (r < res.keywords.keywords.length - 1) {
                                keywords_list += ', ';
                            }
                        }
                        if (keywords_list != "") {
                            $(".media_keywords").html(keywords_list);
                        } else {
                            $(".keyword_li").hide();
                        }

                        if (res.similar.results) {
                            // $(".insert_similar_section").addClass('section-pb-50 bg-black');
                            let results = res.similar.results;
                            let similarSectionHtml = ``;
                            if (results.length > 0) {
                                $(".insert_similar_section").show();
                                similarSectionHtml += `<div class="container">`;
                                similarSectionHtml += `<div class="section-title-4 st-border-bottom">`;
                                similarSectionHtml += `<h2 class="res-font-dec">Similar Movies</h2>`;
                                similarSectionHtml += `</div>`;
                                similarSectionHtml += `<div class="movie-slider-active-3 nav-style-3">`;
                                for (let r = 0; r < results.length; r++) {
                                    similarSectionHtml += `<div class="movie-wrap-plr">`;
                                    similarSectionHtml += `<div class="movie-wrap text-center">`;
                                    similarSectionHtml += `<div class="movie-img">`;
                                    similarSectionHtml += `<a href="/detail/` + media_type + `/` +
                                        results[r].id + `">`;
                                    similarSectionHtml +=
                                        `<img src="{{ env('POSTER_URL') }}` + results[r].poster_path +
                                        `" alt="">`;
                                    similarSectionHtml += `</a>`;
                                    // similarSectionHtml +=
                                    //     `<button title="Watchlist" class="Watch-list-btn" type="button">`;
                                    // similarSectionHtml += `<i class="zmdi zmdi-plus"></i>`;
                                    // similarSectionHtml += `</button>`;
                                    similarSectionHtml += `</div>`;
                                    similarSectionHtml += `<div class="movie-content">`;
                                    similarSectionHtml += `<h3 class="title">`;
                                    similarSectionHtml += `<a href="/detail/` + media_type + `/` +
                                        results[r].id + `">` + ((results[r].title) ? results[r].title : results[
                                            r].name) + `</a>`;
                                    similarSectionHtml += `</h3>`;
                                    similarSectionHtml += `<span>Quality : HD</span>`;
                                    similarSectionHtml += `<div class="movie-btn">`;
                                    similarSectionHtml +=
                                        `<a href="/detail/` + media_type + `/` + results[r].id +
                                        `" class="btn-style-hm4-2 animated">Details</a>`;
                                    similarSectionHtml += `</div>`;
                                    similarSectionHtml += `</div>`;
                                    similarSectionHtml += `</div>`;
                                    similarSectionHtml += `</div>`;
                                }
                                similarSectionHtml += `</div>`;
                                similarSectionHtml += `</div>`;
                            }
                            $(".insert_similar_section").html(similarSectionHtml);
                        }

                        if (res.recommendations.results) {
                            // $(".insert_required_section").addClass('section-ptb-50 bg-black-2');
                            let results = res.recommendations.results;
                            let recommendedSectionHtml = ``;
                            if (results.length > 0) {
                                recommendedSectionHtml += `<div class="container">`;
                                recommendedSectionHtml += `<div class="section-title-4 st-border-bottom">`;
                                recommendedSectionHtml += `<h2 class="res-font-dec">Recommended For You</h2>`;
                                recommendedSectionHtml += `</div>`;
                                recommendedSectionHtml += `<div class="movie-slider-active-3 nav-style-3">`;
                                for (let r = 0; r < results.length; r++) {
                                    recommendedSectionHtml += `<div class="movie-wrap-plr">`;
                                    recommendedSectionHtml += `<div class="movie-wrap text-center">`;
                                    recommendedSectionHtml += `<div class="movie-img">`;
                                    recommendedSectionHtml += `<a href="/detail/` + media_type + `/` +
                                        results[r].id + `">`;
                                    recommendedSectionHtml +=
                                        `<img src="{{ env('POSTER_URL') }}` + results[r].poster_path +
                                        `" alt="">`;
                                    recommendedSectionHtml += `</a>`;
                                    // recommendedSectionHtml +=
                                    //     `<button title="Watchlist" class="Watch-list-btn" type="button">`;
                                    // recommendedSectionHtml += `<i class="zmdi zmdi-plus"></i>`;
                                    // recommendedSectionHtml += `</button>`;
                                    recommendedSectionHtml += `</div>`;
                                    recommendedSectionHtml += `<div class="movie-content">`;
                                    recommendedSectionHtml += `<h3 class="title">`;
                                    recommendedSectionHtml += `<a href="/detail/` + media_type + `/` +
                                        results[r].id + `">` + ((results[r].title) ? results[r].title : results[
                                            r].name) + `</a>`;
                                    recommendedSectionHtml += `</h3>`;
                                    recommendedSectionHtml += `<span>Quality : HD</span>`;
                                    recommendedSectionHtml += `<div class="movie-btn">`;
                                    recommendedSectionHtml +=
                                        `<a href="/detail/` + media_type + `/` + results[r].id +
                                        `" class="btn-style-hm4-2 animated">Details</a>`;
                                    recommendedSectionHtml += `</div>`;
                                    recommendedSectionHtml += `</div>`;
                                    recommendedSectionHtml += `</div>`;
                                    recommendedSectionHtml += `</div>`;
                                }
                                recommendedSectionHtml += `</div>`;
                                recommendedSectionHtml += `</div>`;
                            }
                            $(".insert_recommended_section").html(recommendedSectionHtml);
                        }
                    } else {
                        let title = ((res.title) ? res.title : res.name);
                        $(".title").html(title);
                        $(".tagline").html(res.tagline);
                        $(".runtime").html(convertIntoHoursMinutes(res.last_episode_to_air.runtime));
                        let release_year = res.last_air_date.split("-")[0];
                        $(".release_year").html(release_year);

                        let genre_list = '';
                        for (let r = 0; r < res.genres.length; r++) {
                            genre_list += toTitleCase(res.genres[r].name);
                            if (r < res.genres.length - 1) {
                                genre_list += ', ';
                            }
                        }
                        $(".genre_list").html(genre_list);

                        let age_appropriate = '';
                        if (res.adult) age_appropriate = '18+';
                        else age_appropriate = '13+';
                        $(".age_appropriate").html('U/A ' + age_appropriate);

                        // $(".media_thumbnail").attr('poster', '{{ env('THUMBNAIL_URL') }}' + res.poster_path);

                        $(".media_trailer_thumbnail").attr('poster', '{{ env('THUMBNAIL_URL') }}' + res
                            .backdrop_path);

                        if (res.videos) {
                            if (res.videos.results.length > 0) {
                                videosListHtml = ``;
                                for (let r = 0; r < res.videos.results.length; r++) {
                                    videosListHtml +=
                                        `<div class="embed-responsive embed-responsive-16by9">`;
                                    videosListHtml +=
                                        `<iframe id="player" class="embed-responsive-item media_trailer_video" frameborder="0"
                                                                    width="560" height="315" src="https://www.youtube.com/embed/` +
                                        res.videos.results[r].key + `?version=3&autoplay=0&rel=0&showinfo=0&autohide=1"
                                                                    allow="autoplay; clipboard-write; encrypted-media" allowfullscreen></iframe>
                                                            </div>`;
                                    videosListHtml += `</div>`;
                                }
                                $(".videos_list").html(videosListHtml);
                                // $(".videos_list").hide();
                                $('.videos_list').slick(movieSliderRestart('videos'));
                            }
                        }

                        if (res.images) {
                            if (res.images.backdrops.length > 0) {
                                backdropsListHtml = ``;
                                for (let r = 0; r < res.images.backdrops.length; r++) {
                                    backdropsListHtml +=
                                        `<div class="embed-responsive embed-responsive-16by9">`;
                                    backdropsListHtml +=
                                        `<img class="img-fluid w-100" src="{{ env('POSTER_URL') }}` + res
                                        .images
                                        .backdrops[r].file_path + `" alt="" />`;
                                    backdropsListHtml += `</div>`;
                                }
                                $(".backdrops_list").html(backdropsListHtml);
                                // $(".backdrops_list").hide();
                                $('.backdrops_list').slick(movieSliderRestart('backdrops'));
                            }
                        }

                        if (res.images) {
                            if (res.images.posters.length > 0) {
                                postersListHtml = ``;
                                for (let r = 0; r < res.images.posters.length; r++) {
                                    postersListHtml += `<div class="movie-wrap-plr">`;
                                    postersListHtml += `<div class="movie-wrap text-center">`;
                                    postersListHtml += `<div class="movie-img">`;
                                    postersListHtml += `<a href="javascript:'">`;
                                    postersListHtml +=
                                        `<img src="{{ env('POSTER_URL') }}` + res.images.posters[r].file_path +
                                        `" alt="">`;
                                    postersListHtml += `</a>`;
                                    postersListHtml += `</div>`;
                                    postersListHtml += `</div>`;
                                    postersListHtml += `</div>`;
                                }
                                $(".posters_list").html(postersListHtml);
                                // $(".posters_list").hide();
                                $('.posters_list').slick(movieSliderRestart('posters'));
                            }
                        }

                        // console.log(res.images.posters)

                        if (res.images) {
                            if (res.images.posters.length > 0) {
                                let postersImagesHtml = ``;
                                for (let a = 0; a < res.images.posters.length; a++) {
                                    postersImagesHtml += `<div>
                                                        	<div class="image">
                                                        		<img src="{{ env('THUMBNAIL_URL') }}` + res.images.posters[
                                        a].file_path + `" />
                                                        	</div>
                                                        </div>`;
                                }
                                $(".images_list").html(postersImagesHtml);
                            }
                        }

                        if (res.credits) {
                            if (res.credits.cast.length > 0) {
                                castListHtml = ``;
                                for (let r = 0; r < res.credits.cast.length; r++) {
                                    castListHtml += `<div class="movie-wrap-plr">`;
                                    castListHtml += `<div class="movie-wrap text-center">`;
                                    castListHtml += `<div class="movie-img">`;
                                    castListHtml += `<a href="javascript:;">`;
                                    if (res.credits.cast[r].profile_path) {
                                        castListHtml += `<img src="{{ env('POSTER_URL') }}` + res.credits.cast[
                                                r].profile_path +
                                            `" alt="">`;
                                    } else {
                                        castListHtml +=
                                            `<img src="/assets/images/other/cast_crew_nf.png" style="height:295px" alt="">`;
                                    }
                                    castListHtml += `</a>`;
                                    castListHtml += `</div>`;
                                    castListHtml += `<div class="movie-content">`;
                                    castListHtml += `<h3 class="title">`;
                                    castListHtml += `<a href="javascript:;">` + res.credits.cast[r].name +
                                        `</a>`;
                                    castListHtml += `</h3>`;
                                    castListHtml += `<span>` + res.credits.cast[r].known_for_department +
                                        `</span>`;
                                    // castListHtml += `<span>` + res.credits.cast[r].known_for_department + `</span>`;
                                    castListHtml += `<div class="movie-btn">`;
                                    castListHtml +=
                                        `<a href="javascript:;" class="btn-style-hm4-2 animated">` + res.credits
                                        .cast[r].character + `</a>`;
                                    castListHtml += `</div>`;
                                    castListHtml += `</div>`;
                                    castListHtml += `</div>`;
                                    castListHtml += `</div>`;
                                }
                                $(".cast_list").html(castListHtml);
                                // $(".cast_list").hide();
                                $('.cast_list').slick(movieSliderRestart('cast_crew'));
                            }
                        }


                        if (res.credits) {
                            if (res.credits.crew.length > 0) {
                                crewListHtml = ``;
                                for (let r = 0; r < res.credits.crew.length; r++) {
                                    crewListHtml += `<div class="movie-wrap-plr">`;
                                    crewListHtml += `<div class="movie-wrap text-center">`;
                                    crewListHtml += `<div class="movie-img">`;
                                    crewListHtml += `<a href="javascript:;">`;
                                    if (res.credits.crew[r].profile_path) {
                                        crewListHtml += `<img src="{{ env('POSTER_URL') }}` + res.credits.crew[
                                                r].profile_path +
                                            `" alt="">`;
                                    } else {
                                        crewListHtml +=
                                            `<img src="/assets/images/other/cast_crew_nf.png" style="height:295px" alt="">`;
                                    }
                                    crewListHtml += `</a>`;
                                    crewListHtml += `</div>`;
                                    crewListHtml += `<div class="movie-content">`;
                                    crewListHtml += `<h3 class="title">`;
                                    crewListHtml += `<a href="javascript:;">` + res.credits.crew[r].name +
                                        `</a>`;
                                    crewListHtml += `</h3>`;
                                    crewListHtml += `<span>` + res.credits.crew[r].known_for_department +
                                        `</span>`;
                                    // crewListHtml += `<span>` + res.credits.crew[r].known_for_department + `</span>`;
                                    crewListHtml += `<div class="movie-btn">`;
                                    crewListHtml +=
                                        `<a href="javascript:;" class="btn-style-hm4-2 animated">` + res.credits
                                        .crew[r].job + `</a>`;
                                    crewListHtml += `</div>`;
                                    crewListHtml += `</div>`;
                                    crewListHtml += `</div>`;
                                    crewListHtml += `</div>`;
                                }
                                $(".crew_list").html(crewListHtml);
                                // $(".crew_list").hide();
                                $('.crew_list').slick(movieSliderRestart('cast_crew'));
                            }
                        }

                        $(".media_overview").html(res.overview);
                        $(".media_status").html(res.status);
                        $(".released_date").html(res.last_air_date.replaceAll("-", "/"));
                        $(".media_budget_title").html("No. of Seasons");
                        $(".media_budget").html(res.number_of_seasons);
                        $(".media_revenue_title").html("No. of Episodes");
                        $(".media_revenue").html(res.number_of_episodes);

                        let spoken_lang_list = '';
                        for (let r = 0; r < res.spoken_languages.length; r++) {
                            spoken_lang_list += toTitleCase(res.spoken_languages[r].english_name);
                            if (r < res.spoken_languages.length - 1) {
                                spoken_lang_list += ', ';
                            }
                        }

                        $(".media_original_lang").html(spoken_lang_list);

                        let keywords_list = '';
                        for (let r = 0; r < res.keywords.results.length; r++) {
                            keywords_list += toTitleCase(res.keywords.results[r].name);
                            if (r < res.keywords.results.length - 1) {
                                keywords_list += ', ';
                            }
                        }
                        if (keywords_list != "") {
                            $(".media_keywords").html(keywords_list);
                        } else {
                            $(".keyword_li").hide();
                        }

                        if (res.similar.results) {
                            // $(".insert_similar_section").addClass('section-pb-50 bg-black');
                            let results = res.similar.results;
                            let similarSectionHtml = ``;
                            if (results.length > 0) {
                                $(".insert_similar_section").show();
                                similarSectionHtml += `<div class="container">`;
                                similarSectionHtml += `<div class="section-title-4 st-border-bottom">`;
                                similarSectionHtml += `<h2 class="res-font-dec">Similar Movies</h2>`;
                                similarSectionHtml += `</div>`;
                                similarSectionHtml += `<div class="movie-slider-active-3 nav-style-3">`;
                                for (let r = 0; r < results.length; r++) {
                                    similarSectionHtml += `<div class="movie-wrap-plr">`;
                                    similarSectionHtml += `<div class="movie-wrap text-center">`;
                                    similarSectionHtml += `<div class="movie-img">`;
                                    similarSectionHtml += `<a href="/detail/` + media_type + `/` +
                                        results[r].id + `">`;
                                    similarSectionHtml +=
                                        `<img src="{{ env('POSTER_URL') }}` + results[r].poster_path +
                                        `" alt="">`;
                                    similarSectionHtml += `</a>`;
                                    // similarSectionHtml +=
                                    //     `<button title="Watchlist" class="Watch-list-btn" type="button">`;
                                    // similarSectionHtml += `<i class="zmdi zmdi-plus"></i>`;
                                    // similarSectionHtml += `</button>`;
                                    similarSectionHtml += `</div>`;
                                    similarSectionHtml += `<div class="movie-content">`;
                                    similarSectionHtml += `<h3 class="title">`;
                                    similarSectionHtml += `<a href="/detail/` + media_type + `/` +
                                        results[r].id + `">` + ((results[r].title) ? results[r].title : results[
                                            r].name) + `</a>`;
                                    similarSectionHtml += `</h3>`;
                                    similarSectionHtml += `<span>Quality : HD</span>`;
                                    similarSectionHtml += `<div class="movie-btn">`;
                                    similarSectionHtml +=
                                        `<a href="/detail/` + media_type + `/` + results[r].id +
                                        `" class="btn-style-hm4-2 animated">Details</a>`;
                                    similarSectionHtml += `</div>`;
                                    similarSectionHtml += `</div>`;
                                    similarSectionHtml += `</div>`;
                                    similarSectionHtml += `</div>`;
                                }
                                similarSectionHtml += `</div>`;
                                similarSectionHtml += `</div>`;
                            }
                            $(".insert_similar_section").html(similarSectionHtml);
                        }

                        if (res.recommendations.results) {
                            // $(".insert_required_section").addClass('section-ptb-50 bg-black-2');
                            let results = res.recommendations.results;
                            let recommendedSectionHtml = ``;
                            if (results.length > 0) {
                                recommendedSectionHtml += `<div class="container">`;
                                recommendedSectionHtml += `<div class="section-title-4 st-border-bottom">`;
                                recommendedSectionHtml += `<h2 class="res-font-dec">Recommended For You</h2>`;
                                recommendedSectionHtml += `</div>`;
                                recommendedSectionHtml += `<div class="movie-slider-active-3 nav-style-3">`;
                                for (let r = 0; r < results.length; r++) {
                                    recommendedSectionHtml += `<div class="movie-wrap-plr">`;
                                    recommendedSectionHtml += `<div class="movie-wrap text-center">`;
                                    recommendedSectionHtml += `<div class="movie-img">`;
                                    recommendedSectionHtml += `<a href="/detail/` + media_type + `/` +
                                        results[r].id + `">`;
                                    recommendedSectionHtml +=
                                        `<img src="{{ env('POSTER_URL') }}` + results[r].poster_path +
                                        `" alt="">`;
                                    recommendedSectionHtml += `</a>`;
                                    // recommendedSectionHtml +=
                                    //     `<button title="Watchlist" class="Watch-list-btn" type="button">`;
                                    // recommendedSectionHtml += `<i class="zmdi zmdi-plus"></i>`;
                                    // recommendedSectionHtml += `</button>`;
                                    recommendedSectionHtml += `</div>`;
                                    recommendedSectionHtml += `<div class="movie-content">`;
                                    recommendedSectionHtml += `<h3 class="title">`;
                                    recommendedSectionHtml += `<a href="/detail/` + media_type + `/` +
                                        results[r].id + `">` + ((results[r].title) ? results[r].title : results[
                                            r].name) + `</a>`;
                                    recommendedSectionHtml += `</h3>`;
                                    recommendedSectionHtml += `<span>Quality : HD</span>`;
                                    recommendedSectionHtml += `<div class="movie-btn">`;
                                    recommendedSectionHtml +=
                                        `<a href="/detail/` + media_type + `/` + results[r].id +
                                        `" class="btn-style-hm4-2 animated">Details</a>`;
                                    recommendedSectionHtml += `</div>`;
                                    recommendedSectionHtml += `</div>`;
                                    recommendedSectionHtml += `</div>`;
                                    recommendedSectionHtml += `</div>`;
                                }
                                recommendedSectionHtml += `</div>`;
                                recommendedSectionHtml += `</div>`;
                            }
                            $(".insert_recommended_section").html(recommendedSectionHtml);
                        }
                    }

                    if (res.watch_providers.IN) {
                        let watch_providers_flatrate = [];
                        let watch_providers_buy = [];
                        let watch_providers_rent = [];
                        if (res.watch_providers.IN.flatrate) {
                            watch_providers_flatrate = res.watch_providers.IN.flatrate;
                        }
                        if (res.watch_providers.IN.buy) {
                            watch_providers_buy = res.watch_providers.IN.buy;
                        }
                        if (res.watch_providers.IN.rent) {
                            watch_providers_rent = res.watch_providers.IN.rent;
                        }

                        if (watch_providers_flatrate.length > 0) {
                            let watchProvidersHtml = ``;
                            watchProvidersHtml += `<<div class="row">`;
                            for (let r = 0; r < watch_providers_flatrate.length; r++) {
                                watchProvidersHtml += `<div class="col-md-2">
                                                        <div class="movie-details-info">
                                                            <a href="javascript:;">
                                                                <img src="{{ env('POSTER_URL') }}` +
                                    watch_providers_flatrate[r].logo_path +
                                    `" alt="" class="img-fluid">
                                                            </a>
                                                        </div>
                                                        <span class="make-it-subtitle">`+watch_providers_flatrate[r].provider_name+`</span>
                                                    </div>`;
                            }
                            watchProvidersHtml += `</div>`;
                            $(".flat_list").html(watchProvidersHtml);
                        }

                        if (watch_providers_buy.length > 0) {
                            let watchProvidersHtml = ``;
                            watchProvidersHtml += `<<div class="row">`;
                            for (let r = 0; r < watch_providers_buy.length; r++) {
                                watchProvidersHtml += `<div class="col-md-2">
                                                        <div class="movie-details-info">
                                                            <a href="javascript:;">
                                                                <img src="{{ env('POSTER_URL') }}` +
                                    watch_providers_buy[r].logo_path +
                                    `" alt="" class="img-fluid">
                                                            </a>
                                                        </div>
                                                        <span class="make-it-subtitle">`+watch_providers_buy[r].provider_name+`</span>
                                                   </div>`;
                            }
                            watchProvidersHtml += `</div>`;
                            $(".buy_list").html(watchProvidersHtml);
                        }

                        if (watch_providers_rent.length > 0) {
                            let watchProvidersHtml = ``;
                            watchProvidersHtml += `<<div class="row">`;
                            for (let r = 0; r < watch_providers_rent.length; r++) {
                                watchProvidersHtml += `<div class="col-md-2">
                                                        <div class="movie-details-info">
                                                            <a href="javascript:;">
                                                                <img src="{{ env('POSTER_URL') }}` +
                                    watch_providers_rent[r].logo_path +
                                    `" alt="" class="img-fluid">
                                                            </a>
                                                        </div>
                                                        <span class="make-it-subtitle">`+watch_providers_rent[r].provider_name+`</span>
                                                    </div>`;
                            }
                            watchProvidersHtml += `</div>`;
                            $(".rent_list").html(watchProvidersHtml);
                        }
                        // } else {
                        //     watchProvidersHtml +=
                        //         `<span class="make-it-subtitle">Information is not available.</span>`;
                    }


                    resetSlider();
                    relatedFns();
                    setTimeout(() => {
                        $(".initThisMedia").click();
                    }, 1000);
                },
            });
        }

        function relatedFns() {
            // $("#initThisMedia").trigger("click");
            // $(".play_trailer").click(function() {
            //     let item = $(this).attr("data-key");
            //     let autoplay = $(this).attr("data-autoplay");
            //     var videoFiles = 'https://www.youtube.com/embed/';
            //     var videoParam = 'autoplay=' + autoplay + '&rel=0&showinfo=0&autohide=1';
            //     document.getElementById('player').src = videoFiles + item + '?' + videoParam;
            // });

            $(".change_watch_providers_div").unbind().click(function() {
                $(".change_watch_providers_div").removeClass("active");
                $(this).addClass("active");
                $(".watch_providers_section").hide();
                let val = $(this).attr('data-value');
                $("." + val + "_list").show();
            });

            $(".change_cast_crew_div").unbind().click(function() {
                $(".change_cast_crew_div").removeClass("active");
                $(this).addClass("active");
                $(".cast_crew_list_div").hide();
                let val = $(this).attr('data-value');
                $("." + val + "_list").show();
            });

            $(".change_media_div").unbind().click(function() {
                $(".change_media_div").removeClass("active");
                $(this).addClass("active");
                $(".media_list_div").hide();
                let val = $(this).attr('data-value');
                $("." + val + "_list").show();
            });

            // $('.trailers_list').slick(movieSliderRestart('trailer'));
            $('.images_list').slick(movieSliderRestart('images'));
        }

        function toTitleCase(str) {
            return str.replace(/(?:^|\s)\w/g, function(match) {
                return match.toUpperCase();
            });
        }

        function convertIntoHoursMinutes(time) {
            let hours = Math.floor(time / 60);
            let minutes = time % 60;
            return hours + "h " + minutes + "m";
        }
    </script>
@endsection
