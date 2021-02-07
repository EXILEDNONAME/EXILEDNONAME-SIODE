<?php

namespace App\Http\Requests\Backend\Main\JASAMARGA\User;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      'name' => 'unique:jasamarga_users',
    ];
  }
}
