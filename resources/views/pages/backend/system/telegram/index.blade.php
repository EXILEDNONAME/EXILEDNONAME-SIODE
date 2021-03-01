<?php
$online = '';
$offline = '';
foreach ( $data as $item ) {
  $host = $item->ip_address;
  if($socket =@ fsockopen($host, $item->port, $errno, $errstr)) {
    $online .= '- ' . $item->name . '%0A';
    fclose($socket);
  }
  else {
    $offline .= '- ' . $item->name . '%0A';
  }
}
if ( $offline == '' ) {
  $status_offline = 'VMS status is on';
}
else {
  $status_offline = 'Status Offline : %0A' . $offline;
  $url = "https://api.telegram.org/bot1457855183:AAFT4VL4SJlm4AzSg_gJQRFFCGK8a7UBOiE/sendmessage?chat_id=-1001256236341&text=$status_offline";
  $contents = file_get_contents($url);
}
?>
