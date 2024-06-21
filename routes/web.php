<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/old', function () {
//     return view('media.cinema_list-old');
// });

// Route::get('/', [MainController::class, "media_list"]);
// Route::get('/detail/{media_type?}/{id?}', [MainController::class, "media_detail"]);

Route::get('/', [MainController::class, "trending_media_page"]);
Route::post('/trending/{period_type?}', [MainController::class, "trending_media_list"]);
Route::post('/popular/{media_type?}', [MainController::class, "popular_media_list"]);
Route::post('/discover/{media_type?}', [MainController::class, "discover_media_list"]);
Route::post('/top_rated/{media_type?}', [MainController::class, "top_rated_media_list"]);
Route::post('/now_playing/{media_type?}', [MainController::class, "now_playing_media_list"]);
Route::post('/trailers/{media_type?}', [MainController::class, "trailers_list"]);
// Route::post('/', [MainController::class, "media_all_lists"]);

Route::get('/detail/{media_type?}/{id?}', [MainController::class, "media_detail_page"]);
Route::post('/detail/{media_type?}/{id?}', [MainController::class, "media_detail_by_id"]);
Route::post('/detail/{media_type?}/{id?}/{season?}', [MainController::class, "media_detail_by_id_season"]);
Route::post('/detail/{media_type?}/{id?}/{season?}/{episode?}', [MainController::class, "media_detail_by_id_season_episode"]);

Route::get('/search', [MainController::class, "search"]);
Route::post('/search', [MainController::class, "search_results"]);

Route::get('/movie', [MainController::class, "movie_page"]);
Route::post('/genres_wise_movies', [MainController::class, "genres_wise_movies"]);

Route::get('/tv', [MainController::class, "tv_page"]);
Route::post('/genres_wise_tv', [MainController::class, "genres_wise_tv"]);

Route::get('/cache', function () {
    Artisan::call('cache:clear');
});