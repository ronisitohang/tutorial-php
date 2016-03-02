<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$n=5;
$k=3;
$i=1;
$hasil_n=1;

// n faktorial
while ($i<=$n)  { 
	$hasil_n=$hasil_n*$i;
	$i++;
}

//set ulang i 
$i = 1;

//deklarasi hasil faktorial k
$hasil_n_kurang_k = 1;

// n-k faktorial
while ($i<=$n-$k) {
	$hasil_n_kurang_k=$hasil_n_kurang_k*$i;
	$i++;
}

echo $hasil_n/$hasil_n_kurang_k;
