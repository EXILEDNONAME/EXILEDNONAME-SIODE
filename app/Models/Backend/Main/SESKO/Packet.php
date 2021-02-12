<?php

namespace App\Models\Backend\Main\SESKO;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Packet extends Model {

  use LogsActivity;

  protected $table = 'sesko_packets';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
