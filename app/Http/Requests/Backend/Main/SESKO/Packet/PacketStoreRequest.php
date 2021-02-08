<?php

namespace App\Http\Requests\Backend\Main\SESKO\Packet;

use Illuminate\Foundation\Http\FormRequest;

class PacketStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      'name' => 'unique:sesko_packets',
    ];
  }
}
