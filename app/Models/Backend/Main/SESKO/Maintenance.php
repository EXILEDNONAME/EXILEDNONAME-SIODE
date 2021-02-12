<?php

namespace App\Models\Backend\Main\SESKO;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

use App\Models\Backend\Main\SESKO\User;

class Maintenance extends Model {

  use LogsActivity;

  protected $table = 'sesko_maintenances';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function sesko_users(){
    return $this->belongsTo(User::class, 'id_user');
  }

}
