<?php

namespace App\Http\Requests\Backend\Main\BROADCAST\Image;

use Illuminate\Foundation\Http\FormRequest;

class ImageStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      'name' => 'unique:broadcast_images',
    ];
  }
}
