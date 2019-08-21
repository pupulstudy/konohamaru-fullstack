<?php

/* 
===============
==== #ASK1 ====
===============

PHP doesn't have shortcut arrow function?
example below doesn't work

$shout = fn => "Halo";
$shout();

===============
==== #ASK2 ====
===============

PHP can't directly create function inside a variable?
example below doesn't work

$hasilPerkalian = function calculateMultiply($num1,$num2){
	echo $num1 * $num2;
}

$hasilPerkalian(); 


*/

// Tugas 1


function shoutOut(){
	return "Halo Function!\n";
}

echo shoutOut();

// Tugas 2

$num1 = 5;
$num2 = 6;


function calculateMultiply($num1,$num2){
	return $num1 * $num2 . "\n";
}

// echo calculateMultiply($num1,$num2);


$hasilPerkalian = calculateMultiply($num1,$num2); 

echo $hasilPerkalian; 

// Tugas 3

$name = "Agus";
$age = 30;
$address = "Jln. Malioboro, Yogjakarta";
$hobby = "gaming";

function processSentence($name,$age,$address,$hobby){
	return "Nama saya $name, umur saya $age tahun, alamat saya di $address, dan saya punya hobby yaitu $hobby!";
}

$fullSentence = processSentence($name,$age,$address,$hobby);

echo $fullSentence 
?>