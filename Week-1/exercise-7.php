<?php

// 1. Menyusun Barisan Bintang

$rows1 = 5;
$i = 0;

while($i !== $rows1){
	echo "*\n";
	$i++;
}

// 2. Menyusun Barisan Bintang Dengan Nested Looping

$rows3 = 5;
$i = 0;

while($i !== $rows3){
	for ($j=0; $j <= $rows3; $j++) { 
		echo "*";
	}
	echo "\n";
	$i++;
}


// 3. Menyusun Barisan Tangga Bintang Dengan Nested Looping

$rows3 = 5;
$i = 0;

while($i !== $rows3){
	for ($j=0; $j <= $i; $j++) { 
		echo "*";
	}
	echo "\n";
	$i++;
}

?>