<?php

namespace App\Models\Backend\Main\VMS;

use Illuminate\Database\Eloquent\Model;

class Type extends Model {
  protected $table = 'vms_types';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];
}
