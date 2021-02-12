<?php

namespace App\Models\Backend\Main\BROADCAST;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Image extends Model {

  use LogsActivity;

  protected $table = 'broadcast_images';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
