<?php

namespace App\Models\Backend\Main\JMTM;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Device extends Model {

  use LogsActivity;

  protected $table = 'jmtm_devices';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];
  
}
