<?php

namespace App\Models\Backend\Main\BROADCAST;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Content extends Model {

  use LogsActivity;

  protected $table = 'broadcast_contents';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
