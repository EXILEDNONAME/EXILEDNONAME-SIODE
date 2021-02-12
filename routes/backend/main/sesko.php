<?php

// SESKO - Locations
Route::group([
  'as' => 'sesko.location.',
  'prefix' => 'dashboard/sesko/locations',
  'namespace' => 'Backend\Main\SESKO',
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

// SESKO - Maintenances
Route::group([
  'as' => 'sesko.maintenance.',
  'prefix' => 'dashboard/sesko/maintenances',
  'namespace' => 'Backend\Main\SESKO',
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

// SESKO - Packets
Route::group([
  'as' => 'sesko.user.',
  'prefix' => 'dashboard/sesko/packets',
  'namespace' => 'Backend\Main\SESKO',
], function(){
  Route::get('status-done/{id}', 'PacketController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'PacketController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'PacketController@enable')->name('enable');
  Route::get('disable/{id}', 'PacketController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'PacketController@status')->name('status');
  Route::get('delete/{id}', 'PacketController@delete')->name('delete');
  Route::get('deleteall', 'PacketController@deleteall')->name('deleteall');
  Route::resource('/', 'PacketController')->parameters(['' => 'id']);
});

// SESKO - Users
Route::group([
  'as' => 'sesko.user.',
  'prefix' => 'dashboard/sesko/users',
  'namespace' => 'Backend\Main\SESKO',
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
