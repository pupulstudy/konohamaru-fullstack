<?php

function konversiMenit($menit) {
	return floor($menit / 60) . ":" . ($menit % 60 < 10 ? "0" . $menit % 60 : $menit % 60 ) . "\n";
  // you can only write your code here!
}

// TEST CASES
echo konversiMenit(63); // 1:03
echo konversiMenit(124); // 2:04
echo konversiMenit(53); // 0:53
echo konversiMenit(88); // 1:28
echo konversiMenit(120); // 2:00

?>