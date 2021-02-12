<?php

// BROADCAST - Contents
Route::group([
  'as' => 'broadcast.content.',
  'prefix' => 'dashboard/broadcast/contents',
  'namespace' => 'Backend\Main\BROADCAST',
], function(){
  Route::get('status-done/{id}', 'ContentController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'ContentController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'ContentController@enable')->name('enable');
  Route::get('disable/{id}', 'ContentController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'ContentController@status')->name('status');
  Route::get('delete/{id}', 'ContentController@delete')->name('delete');
  Route::get('deleteall', 'ContentController@deleteall')->name('deleteall');
  Route::resource('/', 'ContentController')->parameters(['' => 'id']);
});

// BROADCAST - Images
Route::group([
  'as' => 'broadcast.image.',
  'prefix' => 'dashboard/broadcast/images',
  'namespace' => 'Backend\Main\BROADCAST',
], function(){
  Route::get('status-done/{id}', 'ImageController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'ImageController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'ImageController@enable')->name('enable');
  Route::get('disable/{id}', 'ImageController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'ImageController@status')->name('status');
  Route::get('delete/{id}', 'ImageController@delete')->name('delete');
  Route::get('deleteall', 'ImageController@deleteall')->name('deleteall');
  Route::resource('/', 'ImageController')->parameters(['' => 'id']);
});

// BROADCAST - Videos
Route::group([
  'as' => 'broadcast.video.',
  'prefix' => 'dashboard/broadcast/videos',
  'namespace' => 'Backend\Main\BROADCAST',
], function(){
  Route::get('status-done/{id}', 'VideoController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'VideoController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'VideoController@enable')->name('enable');
  Route::get('disable/{id}', 'VideoController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'VideoController@status')->name('status');
  Route::get('delete/{id}', 'VideoController@delete')->name('delete');
  Route::get('deleteall', 'VideoController@deleteall')->name('deleteall');
  Route::resource('/', 'VideoController')->parameters(['' => 'id']);
});
