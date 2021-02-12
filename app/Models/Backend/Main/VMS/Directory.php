<?php

namespace App\Models\Backend\Main\VMS;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

use App\Models\Backend\Main\VMS\Area;
use App\Models\Backend\Main\VMS\Type;

class Directory extends Model {

  use LogsActivity;

  protected $table = 'vms_directories';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function vms_areas(){
    return $this->belongsTo(Area::class, 'id_area');
  }

  public function vms_types(){
    return $this->belongsTo(Type::class, 'id_type');
  }

}
