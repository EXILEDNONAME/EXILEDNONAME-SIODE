<?php

// JASAMARGA - Dashboard
Route::group([
  'as' => 'jasamarga.dashboard.',
  'prefix' => 'dashboard/jasamarga',
  'namespace' => 'Backend\Main\JASAMARGA',
], function(){
  Route::get('/', 'DashboardController@index')->name('index');
});

// JASAMARGA - Devices
Route::group([
  'as' => 'jasamarga.device.',
  'prefix' => 'dashboard/jasamarga/devices',
  'namespace' => 'Backend\Main\JASAMARGA',
], function(){
  Route::get('enable/{id}', 'DeviceController@enable')->name('enable');
  Route::get('disable/{id}', 'DeviceController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'DeviceController@status')->name('status');
  Route::get('delete/{id}', 'DeviceController@delete')->name('delete');
  Route::get('deleteall', 'DeviceController@deleteall')->name('deleteall');
  Route::resource('/', 'DeviceController')->parameters(['' => 'id']);
});

// JASAMARGA - Locations
Route::group([
  'as' => 'jasamarga.location.',
  'prefix' => 'dashboard/jasamarga/locations',
  'namespace' => 'Backend\Main\JASAMARGA',
], function(){
  Route::get('enable/{id}', 'LocationController@enable')->name('enable');
  Route::get('disable/{id}', 'LocationController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'LocationController@status')->name('status');
  Route::get('delete/{id}', 'LocationController@delete')->name('delete');
  Route::get('deleteall', 'LocationController@deleteall')->name('deleteall');
  Route::resource('/', 'LocationController')->parameters(['' => 'id']);
});

// JASAMARGA - Users
Route::group([
  'as' => 'jasamarga.user.',
  'prefix' => 'dashboard/jasamarga/users',
  'namespace' => 'Backend\Main\JASAMARGA',
], function(){
  Route::get('enable/{id}', 'UserController@enable')->name('enable');
  Route::get('disable/{id}', 'UserController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'UserController@status')->name('status');
  Route::get('delete/{id}', 'UserController@delete')->name('delete');
  Route::get('deleteall', 'UserController@deleteall')->name('deleteall');
  Route::resource('/', 'UserController')->parameters(['' => 'id']);
});
