<?php

// DISHUB - Devices
Route::group([
  'as' => 'dishub.device.',
  'prefix' => 'dashboard/dishub/devices',
  'namespace' => 'Backend\Main\DISHUB',
], function(){
  Route::get('status-done/{id}', 'DeviceController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'DeviceController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'DeviceController@enable')->name('enable');
  Route::get('disable/{id}', 'DeviceController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'DeviceController@status')->name('status');
  Route::get('delete/{id}', 'DeviceController@delete')->name('delete');
  Route::get('deleteall', 'DeviceController@deleteall')->name('deleteall');
  Route::resource('/', 'DeviceController')->parameters(['' => 'id']);
});

// DISHUB - Locations
Route::group([
  'as' => 'dishub.location.',
  'prefix' => 'dashboard/dishub/locations',
  'namespace' => 'Backend\Main\DISHUB',
], function(){
  Route::get('status-done/{id}', 'LocationController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'LocationController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'LocationController@enable')->name('enable');
  Route::get('disable/{id}', 'LocationController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'LocationController@status')->name('status');
  Route::get('delete/{id}', 'LocationController@delete')->name('delete');
  Route::get('deleteall', 'LocationController@deleteall')->name('deleteall');
  Route::resource('/', 'LocationController')->parameters(['' => 'id']);
});

// DISHUB - Maintenances
Route::group([
  'as' => 'dishub.maintenance.',
  'prefix' => 'dashboard/dishub/maintenances',
  'namespace' => 'Backend\Main\DISHUB',
], function(){

  Route::get('status-done/{id}', 'MaintenanceController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'MaintenanceController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'MaintenanceController@enable')->name('enable');
  Route::get('disable/{id}', 'MaintenanceController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'MaintenanceController@status')->name('status');
  Route::get('delete/{id}', 'MaintenanceController@delete')->name('delete');
  Route::get('deleteall', 'MaintenanceController@deleteall')->name('deleteall');
  Route::resource('/', 'MaintenanceController')->parameters(['' => 'id']);
});

// DISHUB - Users
Route::group([
  'as' => 'dishub.user.',
  'prefix' => 'dashboard/dishub/users',
  'namespace' => 'Backend\Main\DISHUB',
], function(){
  Route::get('status-done/{id}', 'UserController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'UserController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'UserController@enable')->name('enable');
  Route::get('disable/{id}', 'UserController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'UserController@status')->name('status');
  Route::get('delete/{id}', 'UserController@delete')->name('delete');
  Route::get('deleteall', 'UserController@deleteall')->name('deleteall');
  Route::resource('/', 'UserController')->parameters(['' => 'id']);
});
