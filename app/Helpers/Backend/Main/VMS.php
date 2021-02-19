<?php

use App\Models\Backend\Main\VMS\Area;
use App\Models\Backend\Main\VMS\Type;

function filter_vms_areas() {
  $items = Area::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

function filter_vms_types() {
  $items = Type::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

function vms_areas() {
  $items = Area::orderBy('name','asc')->pluck('name', 'id')->toArray();
  return $items;
}

function vms_types() {
  $items = Type::orderBy('name','asc')->pluck('name', 'id')->toArray();
  return $items;
}

function vms_directories_active() {
  $items = DB::table('vms_directories as a')
    ->join('vms_types as b', 'b.id', '=', 'a.id_type')
    ->selectRaw('CONCAT(b.name, " - ", a.name) as concatname, a.id')
    ->pluck('concatname', 'a.id');
  return $items;
}
