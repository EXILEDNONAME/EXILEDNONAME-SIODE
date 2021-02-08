<?php

namespace App\Models\Backend\Main\JASAMARGA;
use Illuminate\Database\Eloquent\Model;

use App\Models\Backend\Main\JASAMARGA\Location;

class Intercome extends Model {
  protected $table = 'jasamarga_intercomes';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  public function jasamarga_locations(){
    return $this->belongsTo(Location::class, 'id_location');
  }
  
}
