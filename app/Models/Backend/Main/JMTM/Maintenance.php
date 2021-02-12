<?php

namespace App\Models\Backend\Main\JMTM;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

use App\Models\Backend\Main\JMTM\User;

class Maintenance extends Model {

  use LogsActivity;

  protected $table = 'jmtm_maintenances';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function jmtm_users(){
    return $this->belongsTo(User::class, 'id_user');
  }

}
