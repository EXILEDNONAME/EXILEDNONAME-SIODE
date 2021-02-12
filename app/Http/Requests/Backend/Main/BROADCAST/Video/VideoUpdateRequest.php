<?php

namespace App\Http\Requests\Backend\Main\BROADCAST\Video;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VideoUpdateRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      //
    ];
  }
}
