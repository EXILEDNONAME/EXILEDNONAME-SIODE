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
  Route::get('status-done/{id}', 'DeviceController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'DeviceController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'DeviceController@enable')->name('enable');
  Route::get('disable/{id}', 'DeviceController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'DeviceController@status')->name('status');
  Route::get('delete/{id}', 'DeviceController@delete')->name('delete');
  Route::get('deleteall', 'DeviceController@deleteall')->name('deleteall');
  Route::resource('/', 'DeviceController')->parameters(['' => 'id']);
});

// JASAMARGA - Intercomes
Route::group([
  'as' => 'jasamarga.intercome.',
  'prefix' => 'dashboard/jasamarga/intercomes',
  'namespace' => 'Backend\Main\JASAMARGA',
], function(){
  Route::get('status-done/{id}', 'IntercomeController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'IntercomeController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'IntercomeController@enable')->name('enable');
  Route::get('disable/{id}', 'IntercomeController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'IntercomeController@status')->name('status');
  Route::get('delete/{id}', 'IntercomeController@delete')->name('delete');
  Route::get('deleteall', 'IntercomeController@deleteall')->name('deleteall');
  Route::resource('/', 'IntercomeController')->parameters(['' => 'id']);
});

// JASAMARGA - Locations
Route::group([
  'as' => 'jasamarga.location.',
  'prefix' => 'dashboard/jasamarga/locations',
  'namespace' => 'Backend\Main\JASAMARGA',
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

// JASAMARGA - Maintenances
Route::group([
  'as' => 'jasamarga.maintenance.',
  'prefix' => 'dashboard/jasamarga/maintenances',
  'namespace' => 'Backend\Main\JASAMARGA',
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

// JASAMARGA - Officials
Route::group([
  'as' => 'jasamarga.official.',
  'prefix' => 'dashboard/jasamarga/officials',
  'namespace' => 'Backend\Main\JASAMARGA',
], function(){
  Route::get('status-done/{id}', 'OfficialController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'OfficialController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'OfficialController@enable')->name('enable');
  Route::get('disable/{id}', 'OfficialController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'OfficialController@status')->name('status');
  Route::get('delete/{id}', 'OfficialController@delete')->name('delete');
  Route::get('deleteall', 'OfficialController@deleteall')->name('deleteall');
  Route::resource('/', 'OfficialController')->parameters(['' => 'id']);
});

// JASAMARGA - Users
Route::group([
  'as' => 'jasamarga.user.',
  'prefix' => 'dashboard/jasamarga/users',
  'namespace' => 'Backend\Main\JASAMARGA',
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
