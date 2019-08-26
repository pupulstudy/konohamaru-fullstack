<?php


/**
Buatlah sebuah algoritma untuk kasus berikut:
Seorang pengajar sedang memeriksa ujian mahasiswa dan akan memberikan desc nilai dari A-E dengan ketentuan sebagai berikut:
 - Nilai 80 - 100: A
 - Nilai 65 - 79: B
 - Nilai 50 - 64: C
 - Nilai 35 - 49: D
 - Nilai 0 - 34: E

 Tampilkan desc nilai dan nama siswa saat pengajar tersebut memasukkan nilai dan nama yang dia inginkan.

NOTED:
Jika nilai mahasiswa kurang dari 0 atau lebih dari 100 maka tampilkan 'Nilai Invalid'
**/

/*
PSEUDOCODE
STORE "nilai" with any number value
STORE "nama_siswa" with any string value
IF "nilai" is less than or equal to 100 THEN
	DISPLAY string "A" concated with "nama_siswa"
	ELSE IF "nilai" is less than 80 THEN
		DISPLAY string "B" concated with "nama_siswa"
	END IF
	ELSE IF "nilai" is less than 65 THEN
		DISPLAY string "C" concated with "nama_siswa"
 	END IF
 	ELSE IF "nilai" is less than 50 THEN
 		DISPLAY string "D" concated with "nama_siswa"
 	END IF
 	ELSE IF "nilai" is less than 35 AND more than or equal to 0 THEN
 		DISPLAY string "E" concated with "nama_siswa"
 	END IF
	ELSE DISPLAY string "Nilai Invalid" concated with "nama_siswa"
 END IF
*/

$nilai = 85;
$nama_siswa = "Budi";

if($nilai <= 100) {
	echo "A" . " - $nama_siswa";
} else if($nilai < 80) {
	echo "A" . " - $nama_siswa";
} else if($nilai < 65) {
	echo "A" . " - $nama_siswa";
} else if($nilai < 50) {
	echo "A" . " - $nama_siswa";
} else if($nilai < 35 && $nilai >= 0) {
	echo "A" . " - $nama_siswa";
} else {
	echo "Nilai Invalid";
}

?>