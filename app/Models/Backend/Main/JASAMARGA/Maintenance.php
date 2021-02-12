<?php

namespace App\Models\Backend\Main\JASAMARGA;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

use App\Models\Backend\Main\JASAMARGA\User;

class Maintenance extends Model {

  use LogsActivity;

  protected $table = 'jasamarga_maintenances';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function jasamarga_users(){
    return $this->belongsTo(User::class, 'id_user');
  }

}
