<?php

namespace App\Http\Requests\Backend\Main\BROADCAST\Content;

use Illuminate\Foundation\Http\FormRequest;

class ContentStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      'name' => 'unique:broadcast_contents',
    ];
  }
}
