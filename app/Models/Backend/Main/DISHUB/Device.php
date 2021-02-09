<?php

namespace App\Models\Backend\Main\DISHUB;

use Illuminate\Database\Eloquent\Model;

class Device extends Model {
  protected $table = 'dishub_devices';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];
}
