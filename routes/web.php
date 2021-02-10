<?php

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// LANGUAGE
Route::get('lang/{language}', 'LocalizationController@switch')->name('localization.switch');

// DASHBOARD
Route::get('dashboard', 'Backend\System\DashboardController@index')->name('dashboard.index');
Route::get('dashboard/file-manager', 'Backend\System\DashboardController@file_manager')->name('dashboard.file-manager');
Route::get('dashboard/logout', 'Backend\System\DashboardController@logout')->name('dashboard.logout');

// TEST
Route::get('/dashboard/demo', 'DemoController@data');

// SYSTEM
require __DIR__.'/backend/system/default.php';

// Main
require __DIR__.'/backend/main/dishub.php';
require __DIR__.'/backend/main/jasamarga.php';
require __DIR__.'/backend/main/jmtm.php';
require __DIR__.'/backend/main/sesko.php';
require __DIR__.'/backend/main/vms.php';
