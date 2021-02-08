<?php

namespace App\Models\Backend\Main\JMTM;
use Illuminate\Database\Eloquent\Model;

use App\Models\Backend\Main\JMTM\User;

class Maintenance extends Model {
  protected $table = 'jmtm_maintenances';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  public function jmtm_users(){
    return $this->belongsTo(User::class, 'id_user');
  }

}
