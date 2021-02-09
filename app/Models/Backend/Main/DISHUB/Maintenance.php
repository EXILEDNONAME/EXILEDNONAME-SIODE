<?php

namespace App\Models\Backend\Main\DISHUB;
use Illuminate\Database\Eloquent\Model;

use App\Models\Backend\Main\DISHUB\User;

class Maintenance extends Model {
  protected $table = 'dishub_maintenances';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  public function dishub_users(){
    return $this->belongsTo(User::class, 'id_user');
  }

}
