<?php
/*Biasa digunakan untuk mengecek tipe data
is_string
is_bool
is_int
is_null
is_float
is_callable
*/

$fungsi = fn (string $name): string => $name;

var_dump($fungsi("Huwaa"));
var_dump(is_callable($fungsi));
