<?php

namespace App\Http\Requests\Backend\Main\SESKO\Maintenance;

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
