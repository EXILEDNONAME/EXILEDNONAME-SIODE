<?php

namespace App\Models\Backend\Main\JASAMARGA;
use Illuminate\Database\Eloquent\Model;

class Official extends Model {

  protected $table = 'jasamarga_officials';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];
  
}
