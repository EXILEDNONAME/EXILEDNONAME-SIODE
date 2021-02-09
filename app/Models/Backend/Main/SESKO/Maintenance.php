<?php

namespace App\Models\Backend\Main\SESKO;
use Illuminate\Database\Eloquent\Model;

use App\Models\Backend\Main\SESKO\User;

class Maintenance extends Model {
  protected $table = 'sesko_maintenances';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  public function sesko_users(){
    return $this->belongsTo(User::class, 'id_user');
  }

}
