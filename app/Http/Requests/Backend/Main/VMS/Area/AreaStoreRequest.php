<?php

namespace App\Http\Requests\Backend\Main\VMS\Area;

use Illuminate\Foundation\Http\FormRequest;

class AreaStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      'name' => 'unique:vms_areas',
    ];
  }
}
