<?php

namespace App\Models\Backend\Main\VMS;

use Illuminate\Database\Eloquent\Model;

class Area extends Model {
  protected $table = 'vms_areas';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];
}
