<?php
/*
Fitur yang digunakan untukk mencari pola tertentu dnegan membuat pattren
preg_match(pattern, subjek), preg_match_all(pattern, subject) menemukan pola
preg_replace(pattern, replacement, subject) mengganti berdasarkan pola
preg_split(pattern, subject) memotong menjadi array, hal ini lebih advance dari explode
*/

$nama = "Ahmad Solikhin Gayuh Raharjo";

$array = [];

$result = (bool)preg_match_all("/a/i", $nama, $array/*Buat nyimpen yang ditemuin*/);

var_dump($result);
var_dump($array);

$kata2 = "Aku dan Kamu adalah sebuah Aku";
$result = preg_replace("/Kamu|Aku/i", "***", $kata2);

var_dump($result);
