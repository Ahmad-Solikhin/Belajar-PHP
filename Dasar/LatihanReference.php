<?php
//Reference mengakses variable yang sama dengan value yang sama dengan nama yang berbeda menggunakan &
//Bisa membuat lebih dari 1 reference

$name = "Gayuh";

$otherName = &$name;
var_dump($name, $otherName);

$otherName = "Solikhin";
var_dump($name, $otherName);

//Pass by reference, mengirim data ke function menggunakan reference

function increment(int &$value) // Jadi nanti ini hasilnya mempengaruhi nilai dari reference nya
{
    $value += 1;
}

$counter = 1;
increment($counter);

var_dump($counter);

//Returning reference, mengembalikan nilai reference pada function. Tapi biasanya ga dipake
function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
var_dump($a);
$a = 500;

$b = &getValue();
var_dump($b);
