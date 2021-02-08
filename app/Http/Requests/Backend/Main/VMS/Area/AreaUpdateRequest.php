<?php

namespace App\Http\Requests\Backend\Main\VMS\Area;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AreaUpdateRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      //
    ];
  }
}
