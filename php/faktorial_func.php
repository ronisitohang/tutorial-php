<?php
function faktorial($angka){
	$hasil = 1;
	$i =1;
	while ($i<=$angka)  { 
		$hasil=$hasil*$i;
		$i++;
	}
	return $hasil;
}


function permutasi($n, $k){
	return faktorial($n)/faktorial($n-$k);
}

function kombinasi($n, $k){
	return faktorial($n)/(faktorial($n-$k) * faktorial($k));
}