<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function faktorial($angka){
	$hasil = 1;
	$i =1;
	while ($i<=$angka)  { 
		$hasil=$hasil*$i;
		$i++;
	}
	return $hasil;
}

$n=5;
$k=3;


echo faktorial($n)/faktorial($n-$k);
