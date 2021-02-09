<?php

namespace App\Http\Requests\Backend\Main\VMS\Directory;

use Illuminate\Foundation\Http\FormRequest;

class DirectoryStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      'name' => 'unique:vms_directories',
    ];
  }
}
