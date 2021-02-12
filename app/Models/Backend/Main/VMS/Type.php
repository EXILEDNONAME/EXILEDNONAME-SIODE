<?php

namespace App\Models\Backend\Main\VMS;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Type extends Model {

  use LogsActivity;

  protected $table = 'vms_types';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];
  
}
