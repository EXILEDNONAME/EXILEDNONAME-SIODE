<?php

namespace App\Http\Requests\Backend\Main\DISHUB\Device;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DeviceUpdateRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      //
    ];
  }
}
