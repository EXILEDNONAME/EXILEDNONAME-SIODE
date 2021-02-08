<?php

namespace App\Http\Requests\Backend\Main\JMTM\Device;

use Illuminate\Foundation\Http\FormRequest;

class DeviceStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      'name' => 'unique:jmtm_devices',
    ];
  }
}
