<?php

namespace App\Http\Requests\Backend\Main\BROADCAST\Image;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ImageUpdateRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      //
    ];
  }
}
