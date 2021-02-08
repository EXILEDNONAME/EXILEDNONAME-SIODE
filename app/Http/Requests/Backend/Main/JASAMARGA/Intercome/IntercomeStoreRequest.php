<?php

namespace App\Http\Requests\Backend\Main\JASAMARGA\Intercome;

use Illuminate\Foundation\Http\FormRequest;

class IntercomeStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      'name' => 'unique:jasamarga_intercomes',
    ];
  }
}
