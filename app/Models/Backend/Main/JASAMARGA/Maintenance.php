<?php

namespace App\Models\Backend\Main\JASAMARGA;
use Illuminate\Database\Eloquent\Model;

use App\Models\Backend\Main\JASAMARGA\User;

class Maintenance extends Model {
  protected $table = 'jasamarga_maintenances';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  public function jasamarga_users(){
    return $this->belongsTo(User::class, 'id_user');
  }

}
