<?php

use App\Models\Backend\Main\JASAMARGA\Device;
use App\Models\Backend\Main\JASAMARGA\Location;
use App\Models\Backend\Main\JASAMARGA\User;

function filter_jasamarga_devices() {
  $items = Device::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

function jasamarga_devices() {
  $items = Device::orderBy('name','asc')->pluck('name', 'id')->toArray();
  return $items;
}

function jasamarga_locations() {
  $items = Location::orderBy('name','asc')->pluck('name', 'id')->toArray();
  return $items;
}

function jasamarga_users_active() {
  $items = DB::table('jasamarga_users as a')
    ->join('jasamarga_locations as b', 'b.id', '=', 'a.id_location')
    ->selectRaw('CONCAT(b.name, " - ", a.name) as concatname, a.id')
    ->where('a.active', 1)
    ->pluck('concatname', 'a.id');
  return $items;
}
