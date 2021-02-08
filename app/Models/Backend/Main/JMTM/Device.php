<?php

namespace App\Models\Backend\Main\JMTM;

use Illuminate\Database\Eloquent\Model;

class Device extends Model {
  protected $table = 'jmtm_devices';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];
}
