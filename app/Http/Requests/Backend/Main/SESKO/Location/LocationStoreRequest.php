<?php

namespace App\Http\Requests\Backend\Main\SESKO\Location;

use Illuminate\Foundation\Http\FormRequest;

class LocationStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      'name' => 'unique:sesko_locations',
    ];
  }
}
