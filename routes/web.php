<?php

Route::get('dashboard/jasamarga/users/datatables', 'Backend\Main\JASAMARGA\UserController@data');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// LANGUAGE
Route::get('lang/{language}', 'LocalizationController@switch')->name('localization.switch');

// DASHBOARD
Route::get('dashboard', 'Backend\Main\DashboardController@index')->name('dashboard.index');
Route::get('dashboard/logout', 'Backend\Main\DashboardController@logout')->name('dashboard.logout');

// TEST
Route::get('/test', 'Backend\Main\JASAMARGA\UserController@test');





// SYSTEM
require __DIR__.'/backend/system/default.php';

// Main
require __DIR__.'/backend/main/jasamarga.php';
