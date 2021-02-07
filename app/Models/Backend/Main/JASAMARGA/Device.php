<?php

namespace App\Models\Backend\Main\JASAMARGA;

use Illuminate\Database\Eloquent\Model;

class Device extends Model {
  protected $table = 'jasamarga_devices';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];
}
