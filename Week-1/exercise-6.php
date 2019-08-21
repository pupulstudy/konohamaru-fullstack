<?php


// 1. Melakukan Looping Menggunakan While

$number = 2;

echo "LOOPING PERTAMA\n";

while ($number <= 20) {
	echo $number . " - I love coding\n";
	if($number === 20) break;
	$number += 2;
}

echo "LOOPING KEDUA\n";

while ($number >= 2) {
	echo $number . " - I will become fullstack developer\n";
	$number -= 2;
}

// 2. Melakukan Looping Menggunakan For

echo "LOOPING PERTAMA\n";

for ($i=0; $i <= 20; $i++) { 
	echo $i . " - I love coding\n";
} 

echo "LOOPING KEDUA\n";

for ($i=20; $i >= 0; $i--) { 
	echo $i . " - I will become fullstack developer\n";
} 

// 3. Angka Ganjil dan Genap

// Problem
// Buatlah sebuah perulangan 1 - 100 dengan pertambahan counter sebanyak 1
for ($i=1; $i <=100 ; $i++) { 
// Di dalam perulangan, periksa setiap angka counter:
// Apabila angka counter adalah angka genap, tuliskan GENAP
// Apabila angka counter adalah angka ganjil, tuliskan GANJIL
	echo $i % 2 === 0 ? "GENAP \n" : "GANJIL\n";
}

// Buatlah 3 perulangan baru dari 1 - 100, dengan pertambahan counter sebesar 2, 5, dan 9.
for ($i=1; $i <=100 ; $i+=2) { 
// Pada 3 perulangan baru ini periksa setiap angka counter:
// Apabila bukan kelipatan yang ditentukan tidak perlu menuliskan apa-apa
// Apabila angka counter adalah kelipatan 3 dengan pertambahan 2, kelipatan 6 dengan pertambahan 5, dan kelipatan 10 dengan pertambahan 9, tuliskan:
// "3 kelipatan 3" dan seterusnya.
	if($i % 3 === 0) echo "$i kelipatan 3\n";
}
for ($i=1; $i <=100 ; $i+=5) { 
// Pada 3 perulangan baru ini periksa setiap angka counter:
// Apabila bukan kelipatan yang ditentukan tidak perlu menuliskan apa-apa
// Apabila angka counter adalah kelipatan 3 dengan pertambahan 2, kelipatan 6 dengan pertambahan 5, dan kelipatan 10 dengan pertambahan 9, tuliskan:
// "3 kelipatan 3" dan seterusnya.
	if($i % 6 === 0) echo "$i kelipatan 6\n";
}
for ($i=1; $i <=100 ; $i+=9) { 
// Pada 3 perulangan baru ini periksa setiap angka counter:
// Apabila bukan kelipatan yang ditentukan tidak perlu menuliskan apa-apa
// Apabila angka counter adalah kelipatan 3 dengan pertambahan 2, kelipatan 6 dengan pertambahan 5, dan kelipatan 10 dengan pertambahan 9, tuliskan:
// "3 kelipatan 3" dan seterusnya.
	if($i % 10 === 0) echo "$i kelipatan 10\n";
}
?>