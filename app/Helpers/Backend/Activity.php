<?php

use Spatie\Activitylog\Models\Activity;

function activity_created() {
  $items = Activity::where('description', 'created')->get();
  return $items;
}

function activity_updated() {
  $items = Activity::where('description', 'updated')->get();
  return $items;
}
