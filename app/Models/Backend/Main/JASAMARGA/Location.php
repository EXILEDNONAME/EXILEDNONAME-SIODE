<?php

namespace App\Models\Backend\Main\JASAMARGA;
use Illuminate\Database\Eloquent\Model;

class Location extends Model {

  protected $table = 'jasamarga_locations';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

}
