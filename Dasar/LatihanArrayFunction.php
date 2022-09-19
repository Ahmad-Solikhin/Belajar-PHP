<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//array_keys untuk mengambil semua keys array
$keys = array_keys($data);
var_dump($keys);

//array_values untuk mengambil semua value array
$value = array_values($data);
var_dump($value);

//array_map untuk mengubah semua data array dengan callback function
$mapFunction = fn (int $value) => $value * 20;
$dataResult = array_map($mapFunction, $data);
var_dump($dataResult);

//sort untuk mengurutkan array

//rsort mengurutkan kebalik
rsort($data);
var_dump($data);

//shuffle mengacak isi data array
shuffle($data);
var_dump($data);
