<?php

namespace App\Models\Backend\Main\JASAMARGA;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

use App\Models\Backend\Main\JASAMARGA\Location;

class Intercome extends Model {

  use LogsActivity;

  protected $table = 'jasamarga_intercomes';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function jasamarga_locations(){
    return $this->belongsTo(Location::class, 'id_location');
  }

}
