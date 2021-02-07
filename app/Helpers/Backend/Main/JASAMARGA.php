<?php

use App\Models\Backend\Main\JASAMARGA\Device;
use App\Models\Backend\Main\JASAMARGA\Location;

function jasamarga_devices() {
  $items = Device::orderBy('name','asc')->pluck('name', 'id')->toArray();
  return $items;
}

function jasamarga_locations() {
  $items = Location::orderBy('name','asc')->pluck('name', 'id')->toArray();
  return $items;
}
