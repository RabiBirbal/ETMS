<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\TournamentRegisterController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CreateTournamentController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\EditHomepageController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\IndexController;

use App\Models\Tbl_tournament;
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

// Route::get('/', function () {
//     return view('index');
// });
Route::get("/",[IndexController::class,'showData']);
// Route::get("/",[IndexController::class,'showNews']);

// Route::get('/news', function () {
//     return view('news');
// });

Route::view('news','/news'); //small code for routing

Route::get('/aboutus', function () {
    return view('about_us');
});

Route::post("contact_us",[ContactUsController::class,'saveData']);
Route::view("contactus",'contact_us');

Route::get('/results', function () {
    return view('result');
});

Route::get('/FinalResult', function () {
    return view('result1');
});

Route::get('/MatchdayResult', function () {
    return view('matchdayResult');
});

Route::get('/tournaments', function () {
    return view('tournament');
});

Route::get('/tournamentDetail/{id}', function ($id) {
    $tournaments=Tbl_tournament::where('id',$id);
    dd($tournaments);
    return view('tournamentDetail');
});

Route::get('/PastTournament', function () {
    return view('tournamentPast');
});

Route::get('/UpcomingTournament', function () {
    return view('tournamentUpcoming');
});

Route::post("register",[RegisterController::class,'saveData']);
Route::view("register",'register');

// Route::get('/sponsor', function () {
//     return view('sponsor');
// });
Route::post("sponsor",[SponsorController::class,'saveData']);
Route::view("sponsor",'sponsor');


Route::post("tournamentRegister",[TournamentRegisterController::class,'getData']);
Route::view("tournament_registration",'tournamentRegister');

// Admin part starts

Route::get('/admin', function () {
    return view('admin/index');
});

Route::get('/dashboard2', function () {
    return view('admin/index2');
});


Route::post("admin/addAdmin",[AdminController::class,'saveData']);
Route::view("add_admin",'admin/addAdmin');

Route::get("admin_detail",[AdminController::class,'showData']);
Route::get("delete_admin/{id}",[AdminController::class,'deleteData']);
Route::get("edit_admin/{id}",[AdminController::class,'updateData']);
Route::post("edit_admin",[AdminController::class,'editData']);

Route::get("users",[RegisterController::class,'showData']);
Route::get("delete_user/{id}",[RegisterController::class,'deleteData']);

Route::get('/user_edit', function () {
    return view('admin/userEdit');
});

Route::get("tournament_detail",[CreateTournamentController::class,'showData']);
Route::get("delete_tournament/{id}",[CreateTournamentController::class,'deleteData']);
Route::post("admin/tournament_create",[CreateTournamentController::class,'saveData']);
Route::view("create_tournament",'admin/tournament_create');

Route::get('/tournament_edit/1', function () {
    return view('admin/tournament_edit');
});
Route::get("tournament_edit/{id}",[CreateTournamentController::class,'updateData']);

Route::get('/player_selection', function () {
    return view('admin/player_selection');
});

Route::post("admin/schedule_add",[ScheduleController::class,'saveData']);
Route::view("add_schedule",'admin/schedule_add');

// Route::get('/schedule_detail', function () {
//     return view('admin/schedule_detail');
// });
Route::get("schedule_detail",[ScheduleController::class,'showData']);
Route::get("delete_schedule/{id}",[ScheduleController::class,'deleteData']);
Route::get("edit_schedule/{id}",[ScheduleController::class,'updateData']);
Route::post("edit_schedule",[ScheduleController::class,'editData']);


Route::get('/edit_schedule', function () {
    return view('admin/schedule_edit');
});

// Route::get('/contact_us', function () {
//     return view('admin/contact_us');
// });
Route::get("contact_us",[ContactUsController::class,'showData']);
Route::get("delete_feedback/{id}",[ContactUsController::class,'deleteData']);


Route::post("admin/news_add",[NewsController::class,'saveData']);
Route::view("add_news",'admin/news_add');

Route::get("news_detail",[NewsController::class,'showData']);
Route::get("delete_news/{id}",[NewsController::class,'deleteData']);
Route::get("edit_news/{id}",[NewsController::class,'updateData']);
Route::post("edit_news",[NewsController::class,'editData']);

Route::get("edit_homepage",[EditHomepageController::class,'showData1']);
Route::post("edit_homepage",[EditHomepageController::class,'editBg']);
Route::post("admin/homepage",[EditHomepageController::class,'editPara']);
// Route::view("edit_homepage",'admin/homepage');

Route::get("aboutus_page",[AboutusController::class,'showData']);
// Route::get("aboutus_page",[AboutusController::class,'updateData']);
Route::post("edit_aboutus",[AboutusController::class,'editData']);

Route::post("admin/result_matchday",[ResultController::class,'saveData']);
Route::view("matchday_result",'admin/result_matchday');

Route::get("result_detail",[ResultController::class,'showData']);
Route::get("delete_result/{id}",[ResultController::class,'deleteData']);
Route::get("edit_result/{id}",[ResultController::class,'updateData']);
Route::post("edit_result",[ResultController::class,'editData']);

Route::get('/edit_profile', function () {
    return view('admin/edit_profile');
});

Route::get("sponsors_details",[SponsorController::class,'showData']);
Route::get("delete_sponsors/{id}",[SponsorController::class,'deleteData']);
