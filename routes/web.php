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
Auth::routes();

Route::get('/', function() {return redirect('/recruitment');});
Route::get('login', 'Auth\DiscordController@login')->name('login');
Route::get('/register', 'Auth\DiscordController@login');
Route::get('discord/redirect',  'Auth\DiscordController@login');

Route::get('/apply','RecruitmentController@apply');
Route::post('/apply', 'RecruitmentController@submit');
Route::get('/recruitment', 'RecruitmentController@list');
Route::get('/recruitment/toggle/{spec}', 'RecruitmentController@toggle')->middleware('auth');
Route::get('/progress','ProgressController@list');
Route::get('/progress/toggle/{boss}', 'ProgressController@toggle')->middleware('auth');
Route::get('/gbas','InfoController@gbas')->middleware('auth');
Route::get('/addons', 'InfoController@addons')->middleware('auth');
Route::get('/applications','ApplicationController@list')->middleware('auth');

