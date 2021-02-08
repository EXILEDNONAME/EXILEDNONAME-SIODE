<?php

namespace App\Models\Backend\Main\JMTM;
use Illuminate\Database\Eloquent\Model;

use App\Models\Backend\Main\JMTM\Device;

class User extends Model {

  protected $table = 'jmtm_users';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  public function jmtm_devices(){
    return $this->belongsTo(Device::class, 'id_device');
  }

}
