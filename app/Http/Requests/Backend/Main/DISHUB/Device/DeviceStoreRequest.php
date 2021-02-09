<?php

namespace App\Http\Requests\Backend\Main\DISHUB\Device;

use Illuminate\Foundation\Http\FormRequest;

class DeviceStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      'name' => 'unique:dishub_devices',
    ];
  }
}
