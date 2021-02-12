<?php

namespace App\Http\Requests\Backend\Main\BROADCAST\Video;

use Illuminate\Foundation\Http\FormRequest;

class VideoStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      'name' => 'unique:broadcast_videos',
    ];
  }
}
