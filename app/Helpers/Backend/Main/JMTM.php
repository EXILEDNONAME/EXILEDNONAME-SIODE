<?php

use App\Models\Backend\Main\JMTM\Device;
use App\Models\Backend\Main\JMTM\User;

function filter_jmtm_devices() {
  $items = Device::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

function jmtm_devices() {
  $items = Device::orderBy('name','asc')->pluck('name', 'id')->toArray();
  return $items;
}

function jmtm_users_active() {
  $items = DB::table('jmtm_users as a')
    ->join('jmtm_devices as b', 'b.id', '=', 'a.id_device')
    ->selectRaw('CONCAT(a.name) as concatname, a.id')
    ->where('a.active', 1)
    ->pluck('concatname', 'a.id');
  return $items;
}
