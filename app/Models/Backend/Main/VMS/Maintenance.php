<?php

namespace App\Models\Backend\Main\VMS;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

use App\Models\Backend\Main\VMS\Directory;

class Maintenance extends Model {

  use LogsActivity;

  protected $table = 'vms_maintenances';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function vms_directories(){
    return $this->belongsTo(Directory::class, 'id_directory');
  }

}
