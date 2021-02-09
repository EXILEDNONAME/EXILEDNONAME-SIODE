<?php

use App\Models\Backend\Main\DISHUB\Device;
use App\Models\Backend\Main\DISHUB\Location;
use App\Models\Backend\Main\DISHUB\User;

function filter_dishub_devices() {
  $items = Device::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

function filter_dishub_locations() {
  $items = Location::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

function dishub_devices() {
  $items = Device::orderBy('name','asc')->pluck('name', 'id')->toArray();
  return $items;
}

function dishub_locations() {
  $items = Location::orderBy('name','asc')->pluck('name', 'id')->toArray();
  return $items;
}

function dishub_users_active() {
  $items = DB::table('dishub_users as a')
    ->join('dishub_locations as b', 'b.id', '=', 'a.id_location')
    ->selectRaw('CONCAT(b.name, " - ", a.name) as concatname, a.id')
    ->where('a.active', 1)
    ->pluck('concatname', 'a.id');
  return $items;
}
