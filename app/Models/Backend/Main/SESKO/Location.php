<?php

namespace App\Models\Backend\Main\SESKO;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Location extends Model {

  use LogsActivity;

  protected $table = 'sesko_locations';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
