<?php

namespace App\Models\Backend\Main\SESKO;
use Illuminate\Database\Eloquent\Model;

class Location extends Model {

  protected $table = 'sesko_locations';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

}
