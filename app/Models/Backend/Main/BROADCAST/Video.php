<?php

namespace App\Models\Backend\Main\BROADCAST;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Video extends Model {

  use LogsActivity;

  protected $table = 'broadcast_videos';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
