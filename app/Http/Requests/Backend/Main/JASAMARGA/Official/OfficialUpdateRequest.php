<?php

namespace App\Http\Requests\Backend\Main\JASAMARGA\Official;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OfficialUpdateRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      //
    ];
  }
}
