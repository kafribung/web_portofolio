<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/portofolio');
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard', 'DashboardController@dashboard');

    Route::get('/about', 'DashboardController@about');
    Route::get('/about/create', 'DashboardController@aboutCreate');
    Route::post('/about', 'DashboardController@aboutStore');
    Route::get('/about/{id}/edit', 'DashboardController@aboutEdit');
    Route::put('/about/{id}', 'DashboardController@aboutUpdate');
    Route::get('/about/{id}', 'DashboardController@aboutDestroy');

    Route::get('/message', 'DashboardController@message');
    Route::get('/message/{id}', 'DashboardController@messageDestroy');
});

Route::get('/portofolio', 'PortofolioController@portofolio');
Route::post('/message', 'PortofolioController@message');

// Mattama messu
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
