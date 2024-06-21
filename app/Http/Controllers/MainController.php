<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;;

class MainController extends Controller
{
    public static function trending_media_page()
    {
        return view("media.media_list");
    }

    public static function trending_media_list($period_type)
    {
        $api = new ApiController();
        $response = $api->get_request(env("API_ENDPOINT") . "trending/all/" . $period_type);
        $response_decode = json_decode($response, true);
        $results = $response_decode['results'];
        return json_encode($results);
        die;
    }

    public static function popular_media_list($media_type)
    {
        $api = new ApiController();
        $response = $api->get_request(env("API_ENDPOINT")  . "/" . $media_type . "/popular");
        $response_decode = json_decode($response, true);
        $results = $response_decode['results'];
        return json_encode($results);
        die;
    }

    public static function discover_media_list($media_type)
    {
        $api = new ApiController();
        $response = $api->get_request(env("API_ENDPOINT")  . "/discover/" . $media_type);
        $response_decode = json_decode($response, true);
        $results = $response_decode['results'];
        return json_encode($results);
        die;
    }

    public static function top_rated_media_list($media_type)
    {
        $api = new ApiController();
        $response = $api->get_request(env("API_ENDPOINT")  . "/" . $media_type . "/top_rated");
        $response_decode = json_decode($response, true);
        $results = $response_decode['results'];
        return json_encode($results);
        die;
    }

    public static function now_playing_media_list($media_type)
    {
        $api = new ApiController();
        if ($media_type == 'movie') {
            $response = $api->get_request(env("API_ENDPOINT")  . "/" . $media_type . "/now_playing");
        } else if ($media_type == 'tv') {
            $response = $api->get_request(env("API_ENDPOINT")  . "/" . $media_type . "/on_the_air");
        }
        $response_decode = json_decode($response, true);
        $results = $response_decode['results'];
        return json_encode($results);
        die;
    }

    public static function trailers_list($media_type)
    {
        $api = new ApiController();
        $response = $api->get_request(env("API_ENDPOINT") . "movie/videos");
        echo $response;
        die;

        $response_decode = json_decode($response, true);
        $results = $response_decode['results'];
        return json_encode($results);
        die;
    }

    public static function media_detail_page($media_type = null, $id = null)
    {
        return view("media.media_detail", ["media_type" => $media_type, "id" => $id]);
    }

    public static function media_detail_by_id($media_type = null, $id = null)
    {
        $api = new ApiController();
        $response = $api->get_request(env("API_ENDPOINT") . $media_type . "/" . $id, "&append_to_response=videos,images,keywords,reviews,recommendations,similar,credits");
        $response_decode = json_decode($response, true);
        $response_providers = $api->get_request(env("API_ENDPOINT") . $media_type . "/" . $id . "/watch/providers");
        $response_providers_decode = json_decode($response_providers, true)["results"];
        $response_decode["watch_providers"] = $response_providers_decode;
        return json_encode($response_decode);
    }

    public static function media_detail_by_id_season($media_type = null, $id = null, $season = null)
    {
        $api = new ApiController();
        $response = $api->get_request(env("API_ENDPOINT") . $media_type . "/" . $id . "/season/" . $season, "&append_to_response=videos,images,keywords,reviews,recommendations,similar,credits");
        return $response;
    }

    public static function media_detail_by_id_season_episode($media_type = null, $id = null, $season = null, $episode = null)
    {
        $api = new ApiController();
        $response = $api->get_request(env("API_ENDPOINT") . $media_type . "/" . $id . "/season/" . $season . "/episode/" . $episode, "&append_to_response=videos,images,credits,keywords,reviews,recommendations,similar");
        return $response;
    }

    public static function search()
    {
        return view("media.search", ["input" => '']);
    }

    public static function search_results(Request $request)
    {
        $api = new ApiController();
        $response_movie = $api->get_request(env("API_ENDPOINT") . "/search/movie", "&query=" . $request->input);
        $response_movie_decode = json_decode($response_movie, true);
        $results_movie = $response_movie_decode['results'];

        $response_tv = $api->get_request(env("API_ENDPOINT") . "/search/tv", "&query=" . $request->input);
        $response_tv_decode = json_decode($response_tv, true);
        $results_tv = $response_tv_decode['results'];

        return view("media.search", ["input" => $request->input, "results_movie" => $results_movie, "results_tv" => $results_tv]);
    }

    public static function movie_page()
    {
        return view("media.movie");
    }

    public static function genres_wise_movies()
    {
        $api = new ApiController();
        $response_movie_genre = $api->get_request(env("API_ENDPOINT") . "genre/movie/list");
        $response_movie_genre_decode = json_decode($response_movie_genre, true);

        $movies_genres_list = array();
        for ($r = 0; $r < count($response_movie_genre_decode["genres"]); $r++) {
            $response_movies = $api->get_request(env("API_ENDPOINT") . "discover/movie", "&with_genres=" . $response_movie_genre_decode["genres"][$r]["id"]);
            $movies_genres_list[] =  json_decode($response_movies, true)["results"];
        }

        $movies_data = array("genres" => $response_movie_genre_decode["genres"], "movies_lists" => $movies_genres_list);
        return json_encode($movies_data);
        die;

        // $response_tv_genre = $api->get_request(env("API_ENDPOINT") . "genre/tv/list");
        // $response_tv_genre_decode = json_decode($response_tv_genre, true);

        // $tvs_genres_list = array();
        // for ($r=0; $r < count($response_tv_genre_decode["genres"]); $r++) { 
        //     $response_tvs = $api->get_request(env("API_ENDPOINT") . "discover/tv","&sort_by=release_date.desc&with_genres=".$response_tv_genre_decode["genres"][$r]["id"]);
        //     $tvs_genres_list[] =  json_decode($response_tvs, true)['results'];
        // }

        // $tvs_data = array("genres" => $response_tv_genre_decode,"tvs_lists"=>$tvs_genres_list);

        // return json_encode($movies_data);
        // die;

        // $movies_genres_list_ids = array();
        // for ($r=0; $r < count($response_movie_genre_decode["genres"]); $r++) { 
        //     $movies_genres_list_ids[] = $response_movie_genre_decode["genres"][$r]["id"];
        // }
        // $movies_genres_list = implode('|', $movies_genres_list_ids);
        // $response_movies = $api->get_request(env("API_ENDPOINT") . "discover/movie","&sort_by=release_date.desc&with_genres=".$movies_genres_list);
        // $response_movies_decode = json_decode($response_movies, true);
        // $results_movies = $response_movies_decode['results'];
        // echo "<pre>";
        // print_r($movies_genres_list);
        // return json_encode($results);
        // die;
    }

    public static function tv_page()
    {
        return view("media.tv");
    }

    public static function genres_wise_tv()
    {
        $api = new ApiController();
        $response_tv_genre = $api->get_request(env("API_ENDPOINT") . "genre/tv/list");
        $response_tv_genre_decode = json_decode($response_tv_genre, true);

        $tvs_genres_list = array();
        for ($r = 0; $r < count($response_tv_genre_decode["genres"]); $r++) {
            $response_tvs = $api->get_request(env("API_ENDPOINT") . "discover/tv", "&with_genres=" . $response_tv_genre_decode["genres"][$r]["id"]);
            $tvs_genres_list[] =  json_decode($response_tvs, true)["results"];
        }

        $tvs_data = array("genres" => $response_tv_genre_decode["genres"], "tvs_lists" => $tvs_genres_list);
        return json_encode($tvs_data);
        die;
    }
    // public static function media_all_lists()
    // {
    //     $api = new ApiController();
    //     // $trending_response = $api->get_request(env("API_ENDPOINT") . "movie/trending");
    //     // $trending_response_decode = json_decode($trending_response, true);
    //     // $trending_results = $trending_response_decode['results'];

    //     $trending_response = $api->get_request(env("API_ENDPOINT") . "trending/all/day");
    //     $trending_response_decode = json_decode($trending_response, true);
    //     $trending_results = $trending_response_decode['results'];

    //     $horror_response = $api->get_request(env("API_ENDPOINT") . "search/keyword", "&query=horror");
    //     $horror_response_decode = json_decode($horror_response, true);
    //     $horror_results = $horror_response_decode['results'];

    //     // $data = array('trending' => $trending_results,'trending' => $trending_results, 'horror' => $horror_results);
    //     $data = array('trending' => $trending_results, 'horror' => $horror_results);
    //     return json_encode($data);
    //     die;


    //     // $api = new ApiController();
    //     // $response = $api->get_request(env("API_ENDPOINT") . "trending/all/day");
    //     // $response_decode = json_decode($response, true);
    //     // $results = $response_decode['results'];
    //     // return view("media.media_list", ["response" => $results]);
    // }
}
