<?php

namespace App\Http\Requests\Backend\Main\JASAMARGA\Location;

use Illuminate\Foundation\Http\FormRequest;

class LocationStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      'name' => 'unique:jasamarga_locations',
    ];
  }
}
