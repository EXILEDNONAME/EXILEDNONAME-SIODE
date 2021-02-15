<?php

Route::get('broadcast/image-1', 'Frontend\Main\BroadcastController@image_1')->name('broadcast.image-1');

Route::get('broadcast/video-1', 'Frontend\Main\BROADCAST\VideoController@video_1')->name('broadcast.video.video_1');
Route::get('broadcast/video-2', 'Frontend\Main\BROADCAST\VideoController@video_2')->name('broadcast.video.video_2');
