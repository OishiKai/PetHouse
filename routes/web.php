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
Route::get('/faq', 'HomeController@faq')->name('faq');
Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/myPage', 'HomeController@myPage')->name('myPage');
    Route::get('/faq', 'HomeController@faq')->name('faq');

    Route::get('/questionnaire', 'HomeController@questionnaire')->name('questionnaire');
    Route::post('/confirmQuestionnaire', 'HomeController@confirmQuestionnaire')->name('confirmQuestionnaire');
    Route::post('/answerQuestionnaire', 'HomeController@answerQuestionnaire')->name('answerQuestionnaire');

    Route::get('/article', 'ArticleController@article')->name('article');
    Route::post('/articleRegisterA', 'ArticleController@articleRegisterA')->name('articleRegisterA');
    Route::post('/articleRegisterB', 'ArticleController@articleRegisterB')->name('articleRegisterB');
    Route::post('/confirmArticle', 'ArticleController@confirmArticle')->name('confirmArticle');
    Route::post('/articleStore', 'ArticleController@articleStore')->name('articleStore');
    Route::get('/articleDetail/{id}', 'HomeController@articleDetail')->name('articleDetail');
});