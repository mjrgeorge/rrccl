<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutModelController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\DropdownTextController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(FrontController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/about-us','aboutUs')->name('aboutUs');
    Route::get('/our-mission-vision','missionVission')->name('missionVission');
    Route::get('/management-team','managementTeam')->name('managementTeam');
    Route::get('/blog','blog')->name('blog');
    Route::get('/service','service')->name('service');
    Route::get('/project','project')->name('project');
    Route::get('/team','team')->name('team');
    Route::get('/team-details/{id}','teamDetails')->name('teamDetails');
    Route::get('/career','career')->name('career');
    Route::get('/news-media','newsMedia')->name('newsMedia');
    Route::get('/contact-us','contactUs')->name('contactUs');
    Route::get('/service-deails/{id}','serviceDetailsPage')->name('serviceDetailsPage');
    Route::get('/blog_deails/{id}','blog_deails')->name('blog_deails');
    Route::get('/news_deails/{id}','news_deails')->name('news_deails');
    Route::get('/appointment','appointment')->name('appointment');
    Route::post('/bookAppoinment','bookAppoinment')->name('bookAppoinment');
    Route::post('/sendMessage','sendMessage')->name('sendMessage');

});

Route::controller(AdminController::class)->group(function(){
    Route::get('/adminPage','adminLogin')->name('adminLogin');
    Route::get('/dashboard','dashboard')->name('dashboard');
    Route::get('/general','general')->name('general');
    Route::post('/updateGenral','updateGenral')->name('updateGenral');
    Route::get('/homePageSection','homePageSection')->name('homePageSection');
    Route::put('/updateHomePage/{id}','updateHomePage')->name('updateHomePage');
    Route::get('/add-user','addUser')->name('addUser');
    Route::post('/add-user','userAdd')->name('userAdd');
    Route::get('/Useredit{id}','Useredit')->name('Useredit');
    Route::put('/Userupdate{id}','Userupdate')->name('Userupdate');
    Route::delete('/Userdestroy{id}','Userdestroy')->name('Userdestroy');
    Route::get('/getAppoinment','getAppoinment')->name('getAppoinment');
    Route::delete('/deleteAppoinment/{id}','deleteAppoinment')->name('deleteAppoinment');
    Route::get('/job-post','jobPost')->name('jobPost');
    Route::post('/addJob','addJob')->name('addJob');
    Route::delete('/job_delete/{id}','job_delete')->name('job_delete');
    Route::get('/jobDetails/{id}','jobDetails')->name('jobDetails');
    Route::put('/addJobDetails/{id}','addJobDetails')->name('addJobDetails');
    Route::get('/contactMessage','contactMessage')->name('contactMessage');
    Route::get('/partner','partner')->name('partner');
    Route::post('/addPartner','addPartner')->name('addPartner');
    Route::delete('/deletePartner/{id}','deletePartner')->name('deletePartner');
    Route::get('/add-visiting-hours','addVsitingHours')->name('addVsitingHours');
    Route::post('/addHours','addHours')->name('addHours');
    Route::delete('/deleteHours/{id}','deleteHours')->name('deleteHours');
});
Route::resource('dropDown',DropdownTextController::class)->names('dropDown')->middleware('auth');
Route::resource('slider',SliderController::class)->names('slider')->middleware('auth');
Route::resource('services',ServiceController::class)->names('services')->middleware('auth');
Route::resource('teams',TeamController::class)->names('teams')->middleware('auth');
Route::resource('aboutComs',AboutModelController::class)->names('aboutComs')->middleware('auth');
Route::resource('projects',ProjectController::class)->names('projects')->middleware('auth');
Route::resource('blogs',BlogController::class)->names('blogs')->middleware('auth');
Route::resource('news',NewsController::class)->names('news')->middleware('auth');
Route::resource('tags',TagController::class)->names('tags')->middleware('auth');
Route::controller(ServiceController::class)->group(function(){
    Route::post('service-details','serviceDetailsAdd')->name('serviceDetailsAdd');
});
Route::controller(TeamController::class)->group(function(){
    Route::post('addTeamDetails','addTeamDetails')->name('addTeamDetails');
});
Route::controller(DropdownTextController::class)->group(function(){
    Route::get('editDropdown/{id}','editDropdown')->name('editDropdown');
    Route::delete('deleteDrop/{id}','deleteDrop')->name('deleteDrop');
});
Route::controller(BlogController::class)->group(function(){
    Route::post('blogDetailsAdd','blogDetailsAdd')->name('blogDetailsAdd');
});
Route::controller(NewsController::class)->group(function(){
    Route::post('newsDetailsAdd','newsDetailsAdd')->name('newsDetailsAdd');
});
Route::controller(AboutModelController::class)->group(function(){
    Route::get('edit-about/{id}','editAbout')->name('editAbout');
    Route::put('update-about/{id}','updateEdit')->name('updateEdit');
    Route::delete('delete-about/{id}','deleteAbout')->name('deleteAbout');
    Route::get('why-choose-us','whyChooseUs')->name('whyChooseUs');
    Route::post('updateChoose','updateChoose')->name('updateChoose');
});

Auth::routes(["register"=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
