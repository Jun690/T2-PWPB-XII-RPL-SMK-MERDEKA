<?php
$jenis = ' masuk kedalam kategori';
$Buah = 'Cranberry';
switch ($Buah)
{
  case 'Anggur' :
    $kategori = $jenis.' soft fruits';
    break;
  case 'Jambu' :
    $kategori = $jenis.' hard fruits';
    break;
  case 'jeruk nipis' :
    $kategori = $jenis.' citrus fruits';
    break;
  case 'Markisa' :
    $kategori = $jenis.' tropical fruits';
	break;
	case 'Cranberry' :
	$kategori = $jenis.' Underwater fruits';
	break;
  default:
    $kategori = ' belum dimasukan kedalam daftar kategori';
}
echo 'Buah '.$Buah.$kategori;
?>