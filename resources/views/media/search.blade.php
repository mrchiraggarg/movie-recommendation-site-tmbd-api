@extends('layout')


@section('content')
    @include('includes/main_search_banner')
    @if ($input != '')
        <div class="movie-list-area section-pt-50 bg-black-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-12 me-auto ms-auto">
                        <div class="movie-list-top-bar">
                            <div class="movie-list-title">
                                <h2 class="title">Search Results for : {{ $input }}</h2>
                            </div>
                            {{-- <div class="movie-list-clear">
                            <button class="Watch-list-clear-btn" type="button">Clear Watchlist</button>
                        </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="movie-list-area section-ptb-50 bg-black">
            <div class="container">
                <div class="m-4">
                    <div class="btn-group choose-toggler">
                        <label class="btn btn-outline-primary change_media_div active" data-value="movie"
                            for="free_watch_movie">Movie</label>
                        <label class="btn btn-outline-primary change_media_div" data-value="tv"
                            for="free_watch_tv">TV</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 me-auto ms-auto media_list_div movie_section">
                        <div class="movielist-wrap">
                            @foreach ($results_movie as $movie)
                                <div class="single-movielist">
                                    <div class="movielist-img-content">
                                        <div class="movielist-img">
                                            <a href="/detail/movie/{{ $movie['id'] }}">
                                                <img src="{{ env('POSTER_URL') . $movie['poster_path'] }}"
                                                    alt="{{ $movie['title'] ? $movie['title'] : $movie['name'] }}">
                                                {{-- <i class="zmdi zmdi-play play-btn-style"></i> --}}
                                            </a>
                                        </div>
                                        <div class="movielist-content">
                                            <h3 class="title"><a
                                                    href="/detail/movie/{{ $movie['id'] }}">{{ $movie['title'] ? $movie['title'] : $movie['name'] }}
                                                    ({{ date('M, d Y', strtotime($movie['release_date'])) }})
                                                </a>
                                            </h3>
                                            <p>{{ $movie['overview'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 me-auto ms-auto media_list_div tv_section">
                        <div class="movielist-wrap">
                            @foreach ($results_tv as $tv)
                                <div class="single-movielist">
                                    <div class="movielist-img-content">
                                        <div class="movielist-img">
                                            <a href="/detail/tv/{{ $tv['id'] }}">
                                                <img src="{{ env('POSTER_URL') . $tv['poster_path'] }}" alt="">
                                                {{-- <i class="zmdi zmdi-play play-btn-style"></i> --}}
                                            </a>
                                        </div>
                                        <div class="movielist-content">
                                            <h3 class="title"><a
                                                    href="/detail/tv/{{ $tv['id'] }}">{{ $tv['name'] ? $tv['name'] : $tv['title'] }}
                                                    ({{ date('M, d Y', strtotime($tv['first_air_date'])) }})
                                                </a>
                                            </h3>
                                            <p>{{ $tv['overview'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            setTimeout(() => {
                fns();
            }, 100);

            function fns() {
                $(".change_media_div").unbind().click(function() {
                    $(".change_media_div").removeClass("active");
                    $(this).addClass("active");
                    $(".media_list_div").hide();
                    let val = $(this).attr('data-value');
                    $("." + val + "_section").show();
                });
            }
        </script>
    @endif
@endsection
