<?php

use App\Models\Backend\Main\SESKO\Location;
use App\Models\Backend\Main\SESKO\Packet;
use App\Models\Backend\Main\SESKO\User;

function filter_sesko_locations() {
  $items = Location::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

function filter_sesko_packets() {
  $items = Packet::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

function sesko_packets() {
  $items = Packet::orderBy('name','asc')->pluck('name', 'id')->toArray();
  return $items;
}

function sesko_locations() {
  $items = Location::orderBy('name','asc')->pluck('name', 'id')->toArray();
  return $items;
}

function sesko_users_active() {
  $items = DB::table('sesko_users as a')
    ->join('sesko_locations as b', 'b.id', '=', 'a.id_location')
    ->selectRaw('CONCAT(a.name) as concatname, a.id')
    ->where('a.active', 1)
    ->pluck('concatname', 'a.id');
  return $items;
}
