<?php

namespace App\Http\Requests\Backend\Main\DISHUB\Location;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LocationUpdateRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      //
    ];
  }
}
