<?php
$hosts = $ip_address;
$port = $port;


if($socket =@ fsockopen($hosts, $port, $errno, $errstr)) {
  echo '<span class="label label-success label-inline"> Online </span>';
  fclose($socket);
}
else {
  echo '<span class="label label-danger label-inline"> Offline </span>';
}
