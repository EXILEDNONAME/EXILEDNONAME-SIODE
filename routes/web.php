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

// PROFILE
Route::group([
  'as' => 'dashboard.profile.',
  'prefix' => 'dashboard/profile',
  'namespace' => 'Backend\System',
], function(){
  Route::get('about', 'ProfileController@about')->name('about');
  Route::get('password', 'ProfileController@password')->name('password');
  Route::post('change-password', 'ProfileController@change_password')->name('change-password');
  Route::get('personal-information', 'ProfileController@personal_information')->name('personal-information');
  Route::get('timeline', 'ProfileController@timeline')->name('timeline');
  Route::resource('/', 'ProfileController')->only('index');
});

// MANAGEMENT ACCESSES
Route::group([
  'as' => 'system.management.access',
  'prefix' => 'dashboard/management/accesses',
  'namespace' => 'Backend\System\Management',
], function(){
  Route::get('enable/{id}', 'AccessController@enable')->name('enable');
  Route::get('disable/{id}', 'AccessController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'AccessController@status')->name('status');
  Route::get('delete/{id}', 'AccessController@delete')->name('delete');
  Route::get('deleteall', 'AccessController@deleteall')->name('deleteall');
  Route::resource('/', 'AccessController')->parameters(['' => 'id']);
});

// MANAGEMENT USERS
Route::group([
  'as' => 'system.management.user',
  'prefix' => 'dashboard/management/users',
  'namespace' => 'Backend\System\Management',
], function(){
  Route::get('enable/{id}', 'UserController@enable')->name('enable');
  Route::get('disable/{id}', 'UserController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'UserController@status')->name('status');
  Route::get('delete/{id}', 'UserController@delete')->name('delete');
  Route::get('deleteall', 'UserController@deleteall')->name('deleteall');
  Route::resource('/', 'UserController')->parameters(['' => 'id']);
});

// Main
require __DIR__.'/backend/main/jasamarga.php';
