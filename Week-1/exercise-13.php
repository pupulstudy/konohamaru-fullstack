<?php

function xo($str) {
	$xCounter = 0;
	$oCounter = 0;
	for ($i=0; $i < strlen($str); $i++) { 
		$str[$i] === "x" ? $xCounter++ : $oCounter++;
	}
	return $xCounter === $oCounter ? "true\n" : "false\n";
}

// TEST CASES
echo xo('xoxoxo'); // true
echo xo('oxooxo'); // false
echo xo('oxo'); // false
echo xo('xxxooo'); // true
echo xo('xoxooxxo'); // true

?>