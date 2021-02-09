<?php

namespace App\Http\Requests\Backend\Main\SESKO\User;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      // 
    ];
  }
}
