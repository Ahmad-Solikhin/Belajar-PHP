<?php
/*
stdClass dalah class kosong bawaan dari PHP
Biasanya dipake untuk konversi tipe data menjadi object, seperti array jadi object secara otomatis
Maupun kebalikannya, dari object ke array
*/
$array = [
    "firstName" => "Ahmad",
    "lastName" => "Raharjo"
];

$object = (object)$array; //Ngerubah Array ke Object

var_dump($object);

echo "Nama : $object->firstName\n";
$object->firstName = "Gayuh";
echo "Nama : $object->firstName\n";

$baru = (array)$object; //Ngerubah balik ke array
var_dump($baru);
echo $baru["lastName"];
