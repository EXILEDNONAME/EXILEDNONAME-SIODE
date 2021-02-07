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

function test_jasamarga_users_active() {
  $items = User::orderBy('name','asc')->pluck('name', 'id');
  return $items;
}

function jasamarga_users_active() {
  $items = User::join('jasamarga_locations', 'id_location')->get('jasamarga_users.name', 'jasamarga_locations.description');

  return $items;
}
