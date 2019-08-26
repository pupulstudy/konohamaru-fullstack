<?php

/**
---------------------
First Letter Grouping
---------------------

Diberikan sebuah variabel `name`. Buatlah sebuah script untuk menampilkan nama tersebut
berada di group ke-berapa, dengan aturan sebagai berikut:
- Jika huruf pertama dari `name` adalah a, b, c, d maka tampilkan 'Masuk group pertama'
- Jika huruf pertama dari `name` adalah e, f, g, h maka tampilkan 'Masuk group kedua'
- Selain itu tampilkan 'Masuk group terakhir'

Contoh:
- `name` = 'arief', output: 'Masuk group pertama'
- `name` = 'rinnina', output: 'Masuk group kedua'
- `name` = 'joshua', output: 'Masuk group terakhir'
- `name` = 'yusril', output: 'Masuk group terakhir'

*/

$name = "budi"; // Isi nama disini

if ($name[0] === 'a' || $name[0] === 'b' || $name[0] === 'c' || $name[0] === 'd') {
	echo "Masuk group pertama";
} else if ($name[0] === 'e' || $name[0] === 'f' || $name[0] === 'g' || $name[0] === 'h') {
	echo "Masuk group kedua";
} else {
	echo "Masuk group terakhir";
}
?>