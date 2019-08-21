<?php

$nama = 'Mikael';
$peran = '';

if(!$nama && !$peran) echo "Nama harus diisi!";
if($nama){
	switch ($peran) {
		case 'Ksatria':
		echo "Selamat datang di Dunia Proxytia, $nama\nHalo $peran $nama, kamu dapat menyerang dengan senjatamu!";
		break;
		case 'Tabib':
		echo "Selamat datang di Dunia Proxytia, $nama\nHalo $peran $nama, kamu akan membantu temanmu yang terluka.";
		break;
		case 'Penyihir':
		echo "Selamat datang di Dunia Proxytia, $nama\nHalo $peran $nama, ciptakan keajaiban yang membantu kemenanganmu!";
		break;
		case null:
		echo "Halo $nama, Pilih peranmu untuk memulai game!";
		break;
		default:
		echo "Halo $nama, Pilih peran Ksatria, Tabib atau Penyihir untuk memulai game!";
		break;
	}
}
?>