<?php

// VMS - Dashboard
Route::group([
  'as' => 'vms.dashboard.',
  'prefix' => 'dashboard/vms',
  'namespace' => 'Backend\Main\VMS',
], function(){
  Route::get('/', 'DashboardController@index')->name('index');
});

// VMS - Areas
Route::group([
  'as' => 'vms.area.',
  'prefix' => 'dashboard/vms/areas',
  'namespace' => 'Backend\Main\VMS',
], function(){
  Route::get('status-done/{id}', 'AreaController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'AreaController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'AreaController@enable')->name('enable');
  Route::get('disable/{id}', 'AreaController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'AreaController@status')->name('status');
  Route::get('delete/{id}', 'AreaController@delete')->name('delete');
  Route::get('deleteall', 'AreaController@deleteall')->name('deleteall');
  Route::resource('/', 'AreaController')->parameters(['' => 'id']);
});

// VMS - Directories
Route::group([
  'as' => 'vms.directory.',
  'prefix' => 'dashboard/vms/directories',
  'namespace' => 'Backend\Main\VMS',
], function(){
  Route::get('status-done/{id}', 'DirectoryController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'DirectoryController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'DirectoryController@enable')->name('enable');
  Route::get('disable/{id}', 'DirectoryController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'DirectoryController@status')->name('status');
  Route::get('delete/{id}', 'DirectoryController@delete')->name('delete');
  Route::get('deleteall', 'DirectoryController@deleteall')->name('deleteall');
  Route::resource('/', 'DirectoryController')->parameters(['' => 'id']);
});

// VMS - Maintenances
Route::group([
  'as' => 'vms.maintenance.',
  'prefix' => 'dashboard/vms/maintenances',
  'namespace' => 'Backend\Main\VMS',
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

// VMS - Types
Route::group([
  'as' => 'vms.type.',
  'prefix' => 'dashboard/vms/types',
  'namespace' => 'Backend\Main\VMS',
], function(){
  Route::get('status-done/{id}', 'TypeController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'TypeController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'TypeController@enable')->name('enable');
  Route::get('disable/{id}', 'TypeController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'TypeController@status')->name('status');
  Route::get('delete/{id}', 'TypeController@delete')->name('delete');
  Route::get('deleteall', 'TypeController@deleteall')->name('deleteall');
  Route::resource('/', 'TypeController')->parameters(['' => 'id']);
});
