<?php
$tingkatvitamin = "90";
$Buah = "Anggur";
switch($tingkatvitamin)
{
	case(($tingkatvitamin > 90) AND ($tingkatvitamin < 101 )):
	echo "Vitamin di buah $Buah ini Sangat Tinggi";
	break;
	case(($tingkatvitamin > 80) AND ($tingkatvitamin < 91)):
	echo "Vitamin di buah $Buah ini Tinggi";
	break;
	case(($tingkatvitamin > 60) AND ($tingkatvitamin < 81)):
	echo "Vitamin di buah $Buah ini Sedang";
	break;
	case(($tingkatvitamin > 40) AND ($tingkatvitamin < 61)):
	echo "Vitamin di buah $Buah ini Rendah";
	break;
	case(($tingkatvitamin >= 0 ) AND ($tingkatvitamin < 41)):
	echo "Vitamin di buah $Buah ini Sangat Rendah";
	break;
	default:
	echo "Tidak terdapat Vitamin dibuah $Buah ini";
	break;
}
?>
