<?php
//positif tambahkan + depan variabel
$positif = +100;
var_dump($positif);

//negatif tambahkan - depan variabel
$negatif = -100;
var_dump($negatif);

//modulo atau sisa bagi pake %
$modulo = 9 % 2;
var_dump($modulo);

//pangkat pake **
$pangkat = 2 ** 3;
var_dump($pangkat);

//Operator penugasan
$total = 0;
$buah = 1_000;
$mie = 3_000;
$pemasukan = 5_000;

$total += $pemasukan;
$total -= $buah;
$total -= $mie;

var_dump($total);

//Operator perbandingan
var_dump(10 == 10);
var_dump(10 != 9);
var_dump("10" === "10"); //Membandingkan nilai sekaligus tipe datanya
var_dump("10" <> 1);
var_dump(1 > 0);
echo "\n";
//Operator Logika, membandingkan dua nilai boolean
var_dump(true && true);
var_dump(true && false);
var_dump(false && false);
echo "\n";
var_dump(true || true);
echo "\n";
var_dump(!false);
echo "\n";
var_dump(true xor true);
echo "\n";

//operator array
//+ digunakan untuk menggabungkan array
$awal = [
    1 => "Ahmad",
    2 => "Solikhin"
];
$akhir = [
    3 => "Gayuh",
    4 => "Raharjo"
];
$nama = $awal + $akhir;
var_dump($nama);

//== digunakan untuk membandingkan isi dari array tanpa melihat posisinya
$array1 = [
    1 => 1,
    2 => 2,
    3 => 3
];

$array2 = [
    1 => 1,
    3 => 3,
    2 => 2
];

var_dump($array1 == $array2);

//=== digunakan membandingkan isi dari array dengan melihat posisinya
var_dump($array1 === $array2);

//!= digunakan jika isi dari array tidak sama

//!== digunakan jika isi dari array tidak sama dengan melihat posisinya juga
