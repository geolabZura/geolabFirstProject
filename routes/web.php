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

Route::get('/', ['as'=>'login', 'uses'=>'HomeController@index']);

Route::post('/login', ['as'=>'login', 'uses'=>'UserController@login']);
Route::post('/subscribe', ['as'=>'subscribe', 'uses'=>'SubscriberController@getSubscribers']);

Route::group(['prefix'=>'admin', 'middleware'=>'admin'], function(){
    Route::get('/', ['as'=>'admin.statistic', 'uses'=>'AdminController@index']);

    Route::get('/slider', ['as'=>'admin.slider', 'uses'=>'SliderController@index']);
    Route::post('/slider/upload', ['as'=>'admin.slider.upload', 'uses'=>'SliderController@upload']);
    Route::post('/slider/delete/{id}', ['as'=>'admin.slider.delete', 'uses'=>'SliderController@delete']);

    Route::get('/slider/edit/{id}', ['as'=>'admin.slider.edit', 'uses'=>'SliderController@editSlider']);
    Route::post('/slider/edit/{id}', ['as'=>'admin.slide.edit', 'uses'=>'SliderController@edit']);


    Route::get('/service', ['as'=>'admin.service', 'uses'=>'ServiceController@index']);
    Route::post('/service/upload', ['as'=>'admin.service.upload', 'uses'=>'ServiceController@upload']);
    Route::post('/service/delete/{id}', ['as'=>'admin.slider.delete', 'uses'=>'ServiceController@delete']);

    Route::get('/service/edit/{id}', ['as'=>'admin.service.edit', 'uses'=>'ServiceController@editService']);
    Route::post('/service/edit/{id}', ['as'=>'admin.service.edit', 'uses'=>'ServiceController@edit']);


    Route::get('/social', ['as'=>'admin.social', 'uses'=>'SocialController@index']);
    Route::post('/social/upload', ['as'=>'admin.social.upload', 'uses'=>'SocialController@update']);

    Route::get('/social/edit/{id}', ['as'=>'admin.social.edit', 'uses'=>'SocialController@editSocial']);
    Route::post('/social/edit/{id}', ['as'=>'admin.social.edit', 'uses'=>'SocialController@edit']);


    Route::get('/subscriber', ['as'=>'admin.subscriber', 'uses'=>'SubscriberController@index']);
});

