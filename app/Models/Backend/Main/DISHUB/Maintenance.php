<?php

namespace App\Models\Backend\Main\DISHUB;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

use App\Models\Backend\Main\DISHUB\User;

class Maintenance extends Model {

  use LogsActivity;

  protected $table = 'dishub_maintenances';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function dishub_users(){
    return $this->belongsTo(User::class, 'id_user');
  }

}
