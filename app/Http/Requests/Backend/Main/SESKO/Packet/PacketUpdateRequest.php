<?php

namespace App\Http\Requests\Backend\Main\SESKO\Packet;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PacketUpdateRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      //
    ];
  }
}
