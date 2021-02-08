<?php

namespace App\Models\Backend\Main\SESKO;
use Illuminate\Database\Eloquent\Model;

use App\Models\Backend\Main\SESKO\Location;
use App\Models\Backend\Main\SESKO\Packet;

class User extends Model {

  protected $table = 'sesko_users';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  public function sesko_locations(){
    return $this->belongsTo(Location::class, 'id_location');
  }

  public function sesko_packets(){
    return $this->belongsTo(Packet::class, 'id_packet');
  }

}
