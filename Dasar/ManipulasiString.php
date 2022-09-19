<?php
//Operasi dot "." untuk menggabungkan 

$nama = "Gayuh";

echo "Nama : " . $nama . PHP_EOL;
echo "Nama : ", $nama, PHP_EOL;
echo var_dump(1.1);

//Konversi tipe data dari string ke number

$angka = 100;
var_dump($angka);

$kata = (string) $angka;
var_dump($kata);

$baru = (int) $kata;
var_dump($baru);

//String bisa diakses seperti dalam array

$Kalimat = "hemm";
echo $Kalimat[0], PHP_EOL;

//Variable parsing menggunakan kutip dua atau heredoc
echo "Hallo nama saya adalah $nama yang berumur 20 tahun \n";

//Gunakan kurung kurawal jika tidak ingin menspapi
echo "Hallo nama saya adalah {$nama}R";
