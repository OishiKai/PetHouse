<?php

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
//     return view('home');
// });
Route::get('/', 'HomeController@home')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::group(['middleware' => 'auth'], function () {

    Route::get('/questionnaire', 'HomeController@questionnaire')->name('questionnaire');
    Route::post('/confirmQuestionnaire', 'HomeController@confirmQuestionnaire')->name('confirmQuestionnaire');
    Route::post('/answerQuestionnaire', 'HomeController@answerQuestionnaire')->name('answerQuestionnaire');

    Route::get('/article', 'HomeController@article')->name('article');
    Route::post('/articleStore', 'HomeController@articleStore')->name('articleStore');
    Route::get('/articleDetail/{id}', 'HomeController@articleDetail')->name('articleDetail');
});