<?php

namespace App\Http\Requests\Backend\Main\DISHUB\Maintenance;

use Illuminate\Foundation\Http\FormRequest;

class MaintenanceStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      //
    ];
  }
}
