<?php

use Spatie\Activitylog\Models\Activity;

function activities($model) {
  $items = $activity = Activity::where('subject_type', $model)->orderBy('created_at', 'desc')->get();
  return $items;
}
