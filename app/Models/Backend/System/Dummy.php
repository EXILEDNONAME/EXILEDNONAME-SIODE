<?php

namespace App\Models\Backend\Main\DISHUB;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;

class Device extends Model {

  use LogsActivity;

  protected $table = 'dishub_devices';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public static function boot() {

	    parent::boot();

      static::created(function($item) {
          event(new \App\Events\MyEvent($item));

	    });

	}


}
