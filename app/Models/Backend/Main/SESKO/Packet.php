<?php

namespace App\Models\Backend\Main\SESKO;
use Illuminate\Database\Eloquent\Model;

class Packet extends Model {

  protected $table = 'sesko_packets';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

}
