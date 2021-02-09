<?php

namespace App\Models\Backend\Main\DISHUB;
use Illuminate\Database\Eloquent\Model;

use App\Models\Backend\Main\DISHUB\Device;
use App\Models\Backend\Main\DISHUB\Location;

class User extends Model {

  protected $table = 'dishub_users';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  public function dishub_devices(){
    return $this->belongsTo(Device::class, 'id_device');
  }

  public function dishub_locations(){
    return $this->belongsTo(Location::class, 'id_location');
  }

}
