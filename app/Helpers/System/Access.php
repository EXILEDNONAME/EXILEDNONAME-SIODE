<?php

use App\Access;

function access($name) {
  if ( Auth::User()->accesses->description == $name ) {
    $items = Access::where('description', Auth::User()->accesses->description )->first();
    return $items;
  }
}
