<?php

// JMTM - Dashboard
Route::group([
  'as' => 'jmtm.dashboard.',
  'prefix' => 'dashboard/jmtm',
  'namespace' => 'Backend\Main\JMTM',
], function(){
  Route::get('/', 'DashboardController@index')->name('index');
});

// JMTM - Devices
Route::group([
  'as' => 'jmtm.device.',
  'prefix' => 'dashboard/jmtm/devices',
  'namespace' => 'Backend\Main\JMTM',
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

// JMTM - Maintenances
Route::group([
  'as' => 'jmtm.maintenance.',
  'prefix' => 'dashboard/jmtm/maintenances',
  'namespace' => 'Backend\Main\JMTM',
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

// JMTM - Users
Route::group([
  'as' => 'jmtm.user.',
  'prefix' => 'dashboard/jmtm/users',
  'namespace' => 'Backend\Main\JMTM',
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
