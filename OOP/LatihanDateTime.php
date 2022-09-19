<?php
/*
Untuk waktu dan tanggal, atau untuk memanipulasi waktu
setTime(hour, minute, second)
setDate(year, month, day)
setTimestamp(unixTimestamp)
*/

echo date_default_timezone_get() . PHP_EOL;

date_default_timezone_set("Asia/Jakarta"); //Untuk mengubah timezone

echo date_default_timezone_get() . PHP_EOL;

//Bisa juga pake setTimeZone
$dateAmeric = new DateTime();
$dateAmeric->setTimezone(new DateTimeZone("Europe/Berlin"));
var_dump($dateAmeric);

$date = new DateTime();
// $date->setDate(2001, 10, 7);
var_dump($date);

/*
Date interval, memanipulasi sebagian saja ga semuanya
menggunakan function date menggunakan dateinterval
membuat durasi harus diawali dengan P yang artinya period
*/

// $date->add(new DateInterval('PT1M')); //Buat jam menit detik tambahin T jadi PT1M
// var_dump($date);


//Buat ngurangin waktu
$interval = new DateInterval("P1Y");

$oneYearAgo = clone $date;
$oneYearAgo->sub($interval);
var_dump($oneYearAgo);

/*
Format datetime
Bisa dilakukan dengan function format, untuk memanipulasi untuk menampilkan string format waktu
merubah datetime menjadi string
*/

$waktu = $date->format("Y-m-d H:i:s");
echo "Waktu saat ini adalah $waktu\n";

/*
Kebalikannya dari format, dari string ke datetime menggunakan createFromFormat
*/

$tanggal = DateTime::createFromFormat("Y-m-d H:i:s", $waktu);

var_dump($tanggal);
