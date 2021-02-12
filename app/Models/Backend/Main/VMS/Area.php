<?php

namespace App\Models\Backend\Main\VMS;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Area extends Model {

  use LogsActivity;

  protected $table = 'vms_areas';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];
  
}
