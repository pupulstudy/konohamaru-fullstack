<?php

/* 
===============
==== #ASK1 ====
===============

Double ternary operator doesn't work on PHP?
example below doesn't work

function bandingkanAngka($angka1, $angka2) {
	return $angka1 < $angka2 ? "true" : $angka1 === $angka2 ? "-1" : "false"; 
}
*/


function bandingkanAngka($angka1, $angka2) {
	if($angka1 === $angka2) return "-1\n";
	return $angka1 < $angka2 ? "true\n" : "false\n"; 
}

// TEST CASES
echo bandingkanAngka(5, 8); // true
echo bandingkanAngka(5, 3); // false
echo bandingkanAngka(4, 4); // -1
echo bandingkanAngka(3, 3); // -1
echo bandingkanAngka(17, 2); // false

?>