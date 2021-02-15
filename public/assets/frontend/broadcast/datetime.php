<?php
function TanggalIndonesia($date) {
  date_default_timezone_set('Asia/Jakarta');
  $date = date('Y-m-d',strtotime($date));
  if($date == '0000-00-00')
  return 'Tanggal Kosong';

  $tgl = substr($date, 8, 2);
  $bln = substr($date, 5, 2);
  $thn = substr($date, 0, 4);

  switch ($bln) {
    case 1 : {
      $bln = 'Januari';
    }break;
    case 2 : {
      $bln = 'Februari';
    }break;
    case 3 : {
      $bln = 'Maret';
    }break;
    case 4 : {
      $bln = 'April';
    }break;
    case 5 : {
      $bln = 'Mei';
    }break;
    case 6 : {
      $bln = "Juni";
    }break;
    case 7 : {
      $bln = 'Juli';
    }break;
    case 8 : {
      $bln = 'Agustus';
    }break;
    case 9 : {
      $bln = 'September';
    }break;
    case 10 : {
      $bln = 'Oktober';
    }break;
    case 11 : {
      $bln = 'November';
    }break;
    case 12 : {
      $bln = 'Desember';
    }break;
    default: {
      $bln = 'UnKnown';
    }break;
  }

  $hari = date('N', strtotime($date));
  switch ($hari) {
    case 0 : {
      $hari = 'Minggu';
    }break;
    case 1 : {
      $hari = 'Senin';
    }break;
    case 2 : {
      $hari = 'Selasa';
    }break;
    case 3 : {
      $hari = 'Rabu';
    }break;
    case 4 : {
      $hari = 'Kamis';
    }break;
    case 5 : {
      $hari = "Jum'at";
    }break;
    case 6 : {
      $hari = 'Sabtu';
    }break;
    case 7 : {
      $hari = 'Minggu';
    }break;
    default: {
      $hari = 'UnKnown';
    }break;
  }

  $tanggalIndonesia = $hari.", ".$tgl . " " . $bln . " " . $thn;
  return $tanggalIndonesia;
}
echo "<span style='color: #ffffff'>".TanggalIndonesia(date('Y-m-d')) ." / Time : ". date('H:i:s') . " WIB. </span>";
?>
