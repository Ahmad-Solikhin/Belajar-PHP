<?php

require_once "LatihanProperties.php";

$person1 = new LatihanPerson("Gayuh", null);
$person1->address = "Bekasi";
$person1->country = "Indonesia";
$person1->age = "20";
$person1->jenis = "Human";
$person1->email = null;
$person1->sayHello("Amanda");
$final = $person1->sayHelloFinal();
echo $final;

var_dump($person1);
//cara akses constan
echo LatihanPerson::GENDER . PHP_EOL;

$person2 = new LatihanPerson("Ahmad", null);
$person2->address = "Bekasi";
$person2->country = "Indonesia";

var_dump($person2);

$auth = new Author();
$auth->infoAuth();

$gayuh = new LatihanPerson("Gayuh", null);

echo "Program Selesai\n";

//Properties nempel ke object, sedangkan konstan nempel ke class nya
