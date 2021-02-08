<?php

function multiple_return() {
  $items = DB::table('jasamarga_users as a')
    ->join('jasamarga_locations as b', 'b.id', '=', 'a.id_location')
    ->selectRaw('CONCAT("(", b.name, " - ", b.description, ") - ", a.name) as concatname, a.id')
    ->where('a.active', 1)
    ->pluck('concatname', 'a.id');
  return $items;
}
