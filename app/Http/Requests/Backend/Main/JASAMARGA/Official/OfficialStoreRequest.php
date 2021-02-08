<?php

namespace App\Http\Requests\Backend\Main\JASAMARGA\Official;

use Illuminate\Foundation\Http\FormRequest;

class OfficialStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      'name' => 'unique:jasamarga_officials',
    ];
  }
}
