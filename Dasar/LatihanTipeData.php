<?php

// tipe data number
$float = 10.000;
$integer = 1_000;

// var_dump() Digunakan untuk mengetahui tipe data dalam PHP

echo var_dump($float, $integer);

// Floating point pake "e" untuk no koma pakai "-angka"
$seribu = 1e3;

echo "$seribu \n";
echo '$seribu', "\n";

// tipe data boolean

var_dump(true);
var_dump(false);

// tipe data string
echo 'huwaaaa', "\n";

// kutip dua bisa untuk memasukkan escape sequence seperti "/n"

// heredoc nulis panjnang atau multiline
$teks = "semua hal yang kita tidak ketahui
ya karena ga tau
makannya cari tau";

echo <<<TEKS
$teks
TEKS;

// nowdoc ga punya kemampuan parsing atau single quote
echo <<<'TEKS'
$teks
TEKS;

// Variabel variabel 
$contoh = "gayuh";
$$contoh = "raharjo"; //disini jadi ada variable gayuh
echo "\n";
echo $contoh;
echo "\n";
echo $gayuh, "\n";

// constan atau immutable variable yang gabisa diubah, disarankan pake kapital buat constan

define("AUTHOR", "Gayuh");
define("APP_VERSION", 1);

echo AUTHOR, "\n";
echo "Versi App: ", APP_VERSION, "\n";

// nilai NULL adalah variable yang tidak memiliki nilai
$nama = "Gayuh";
$nama = null;

$umur = NULL;

// Mengecek data NULL menggunakan is_null
echo "Is name null? ", is_null($nama), "\n";

// Menghapus variable dengan unset

unset($nama);
// echo $nama;

// mengecek variable ada atau tidak
echo "Apakah ada varibale? ", var_dump(isset($nama));

$nama = "Gayuh";

echo "Apakah ada varibale? ", isset($nama), "\n";

//Tipe data Array
$value = array(1, 2, 3, 4, 5);
var_dump($value);

$names = ["Ahmad", null, "Gayuh", "Raharjo"];
var_dump($names);

//Operasi Array
//$array[index] mengakses array berdasarkan index nya
//$array[index] = value_baru untuk mengubah data
//$array[] = value_baru menambah data paling belakang
//unset($array[index]) untuk menghapus data array berdasarkan index
//count($array) mengambil total data dalam array
$saya = ["Ahmad", "Solikhin", "Gayuh"];
var_dump($saya);
$saya[0] = "ahmad";
var_dump($saya);
unset($saya[0]);
var_dump($saya);
$saya[0] = "Ahmad";
var_dump($saya);
echo count($saya), "\n";
echo $saya[0], "\n";

//Di php array dan map yang memiliki key dan value sama
$ahmad = array(
    "id" => "ahmad",
    "full" => "ahmad sgr",
    "age" => 20
);
var_dump($ahmad);

$gayuh = [
    "id" => "gayuh",
    "full" => "gayuh r",
    "age" => 20
];
var_dump($gayuh);

//array dalam array
$gayuh = [
    "id" => "gayuh",
    "full" => "gayuh r",
    "age" => 20,
    "hobi" => ["badminton", "turu"]
];
var_dump($gayuh);
echo $gayuh["hobi"][0], "\n";
