<?php

namespace App\Models\Backend\Main\JASAMARGA;
use Illuminate\Database\Eloquent\Model;

use App\Models\Backend\Main\JASAMARGA\Device;
use App\Models\Backend\Main\JASAMARGA\Location;

class User extends Model {

  protected $table = 'jasamarga_users';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  public function jasamarga_devices(){
    return $this->belongsTo(Device::class, 'id_device');
  }

  public function jasamarga_locations(){
    return $this->belongsTo(Location::class, 'id_location');
  }

}
