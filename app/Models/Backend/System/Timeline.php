<?php

namespace App\Models\Backend\System;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model {


  protected $table = 'profile_timelines';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
