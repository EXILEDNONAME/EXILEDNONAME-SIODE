<?php

namespace App\Models\Backend\Main\BROADCAST;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class General extends Model {

  use LogsActivity;

  protected $table = 'broadcast_generals';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
