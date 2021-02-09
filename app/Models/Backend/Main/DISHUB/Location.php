<?php

namespace App\Models\Backend\Main\DISHUB;
use Illuminate\Database\Eloquent\Model;

class Location extends Model {

  protected $table = 'dishub_locations';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

}
