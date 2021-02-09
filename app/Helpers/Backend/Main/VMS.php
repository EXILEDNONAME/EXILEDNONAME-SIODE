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
