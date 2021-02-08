<?php

namespace App\Http\Requests\Backend\Main\VMS\Type;

use Illuminate\Foundation\Http\FormRequest;

class TypeStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      'name' => 'unique:vms_types',
    ];
  }
}
