<?php

namespace App\Http\Requests\Backend\Main\JASAMARGA\Intercome;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class IntercomeUpdateRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      //
    ];
  }
}
