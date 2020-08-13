<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth:web' , 'checkAdmin']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

//return dd(Auth::user());
});

Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::resource('project', 'ProjectController');
    Route::resource('resume', 'EducationController');
});
// Route::resource('user', 'UserController');
Route::prefix('admin')->namespace('Lancer')->group(function () {
    Route::resource('work_resume', 'ResumeController');
    Route::resource('work_sample', 'Work_sampleController');
    Route::resource('add_project_file', 'AddprojectfileController');
    Route::resource('offer', 'OfferController');
    Route::resource('lancer', 'LancerController');

});
Route::prefix('admin')->namespace('Project')->group(function () {
    Route::resource('price_project', 'Price_projectController');
});
Route::prefix('admin')->namespace('Financial')->group(function () {
    Route::resource('payment', 'PaymentController');
});
Route::prefix('admin')->namespace('Skill')->group(function () {
    Route::resource('skill', 'SkillController');
});
Route::prefix('admin')->namespace('title')->group(function () {
    Route::resource('title', 'TitleController');
});
Route::prefix('admin')->namespace('province')->group(function () {
    Route::resource('province', 'ProvinceController');
});
Route::prefix('admin')->namespace('category')->group(function () {
    Route::resource('category', 'CategoryController');
});
Route::prefix('admin')->namespace('levelproject')->group(function () {
    Route::resource('levelproject', 'LevelprojectController');
});
Route::prefix('admin')->namespace('levelfile')->group(function () {
    Route::resource('levelfile', 'LevelfileController');
});
Route::prefix('admin')->namespace('comment')->group(function () {
    Route::resource('comment', 'CommentController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
