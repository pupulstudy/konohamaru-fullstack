<?php

/**
--------------------
String Manipulators!
--------------------

Buatlah beberapa function berikut:

1. addTitle, yang menerima 4 parameter yaitu `name1`, `name2`, `name3` dan `name4`.
   Function akan menambahkan 'Mr. ' dan ', ' pada setiap nama dan mengembalikan nilai tersebut.
   Contoh:
   - input: addTitle('Steve Fox', 'Jin Kazama', 'Eddie Gordo', 'Geese Howard')
     output: 'Mr. Steve Fox, Mr. Jin Kazama, Mr. Eddie Gordo, Mr. Geese Howard'

2. changeSpacesWith, yang menerima 2 parameter yaitu `str` dan `to`.
   Function akan mengganti spasi di `str` dengan nilai yang kita berikan lewat parameter `to`
   dan mengembalikan nilai tersebut.
   Contoh:
   - input: changeSpacesWith('Steve Fox', '-')
     output: 'Steve-Fox'
   - input: changeSpacesWith('Sergei Dragunov', '+')
     output: 'Sergei+Dragunov'

3. cutString, yang menerima 1 parameter yaitu `str`.
   Function akan memotong string supaya tersisa 6 karakter dan mengembalikan nilai tersebut.
   Contoh:
   - input: cutString('Kazuya Mishima')
     output: 'Kazuya'
   - input: cutString('Sergei Dragunov')
     output: 'Sergei'
   - input: cutString('Sasuke Uchiha')
     output: 'Sasuke'

RULES:
- Dilarang menggunakan regex
- Dilarang menggunakan slice, split, splice, substring

*/

function addTitle ($person1, $person2, $person3, $person4) {
  return "Mr. $person1, Mr. $person2, Mr. $person3, Mr. $person4";
}

echo(addTitle('Steve Fox', 'Jin Kazama', 'Eddie Gordo', 'Geese Howard'));
echo("\n");

function changeSpacesWith ($str, $to) {
  $newStr = "";
  for ($i=0; $i < strlen($str); $i++) { 
    $str[$i] === " " ? $newStr .= $to : $newStr .= $str[$i]; 
  }
  return $newStr;
}

echo(changeSpacesWith('Sergei Dragunov', '+'));
echo("\n");

function cutString ($str) {
  $newStr = "";
  for ($i=0; $i < 6; $i++) { 
    $newStr .= $str[$i]; 
  }
  return $newStr;
}

echo(cutString('Kazuya Mishima'));

?>