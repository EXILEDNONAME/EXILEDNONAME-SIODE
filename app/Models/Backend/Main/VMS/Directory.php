<?php

namespace App\Models\Backend\Main\VMS;
use Illuminate\Database\Eloquent\Model;

use App\Models\Backend\Main\VMS\Area;
use App\Models\Backend\Main\VMS\Type;

class Directory extends Model {

  protected $table = 'vms_directories';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  public function vms_areas(){
    return $this->belongsTo(Area::class, 'id_area');
  }

  public function vms_types(){
    return $this->belongsTo(Type::class, 'id_type');
  }

}
