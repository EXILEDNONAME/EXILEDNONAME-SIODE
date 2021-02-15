<?php

namespace App\Http\Controllers\Frontend\Main;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
**************************************************
* @return Model-Videos
* @return VideoStoreRequest
* @return VideoUpdateRequest
**************************************************
**/

Use App\Models\Backend\Main\BROADCAST\Video;

class BroadcastController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->path = 'pages.frontend.broadcast';
    $this->model_image = 'App\Models\Backend\Main\BROADCAST\Image';
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function image_1() {
    $data = $this->model_image::all();
    return view($this->path . '.image-1');
  }

  /**
  **************************************************
  * @return Video-1
  **************************************************
  **/

  public function video_1(){
    $video_1 = Video::where('active', 1)->where('type', 1)->orderBy('sort', 'ASC')->get();
    $general = $this->model::first();
    return view($this->path . '.video-1', compact('video_1', 'general'));
  }

  public function video_2(){
    $video_2 = Video::where('active', 1)->where('type', 2)->orderBy('sort', 'ASC')->get();
    $general = $this->model::first();
    return view($this->path . '.video-2', compact('video_2', 'general'));
  }

}
