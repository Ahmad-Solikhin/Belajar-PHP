<?php
/*
Hal ini digunakan untuk membandingkan kedua objek menggunakan == atau ===
kalo == itu mengecek properties dari tiap objek
Kalo === ada tambahan apakah mengacu pada objek yang sama
*/

require_once "LatihanObjectCloning.php";

$student1 = new Student();
$student1->id = 1;
$student1->age = 20;
$student1->name = "Gayuh";

$student2 = new Student();
$student2->id = 1;
$student2->age = 20;
$student2->name = "Gayuh";

var_dump($student1 == $student2);
var_dump($student1 === $student2);//Ini akan false karena objeknya beda, ga guna juga
