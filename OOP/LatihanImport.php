<?php
/*
Agar tidak menulis namespace berulang2x bisa dideklarasiin dulu namsepace yang mau dipake menggunakan use

*/

require_once "LatihanNamespace.php";

// use Data\One\Conflict as Conflict1; //Contoh penggunaan alias atau as
// use Data\Two\Conflict as Conflict2;

use Data\{One\Conflict as Conflict1, Two\Conflict as Conflict2}; //Bisa juga pake cara Group Use kayak gini


$conflict1 = new Conflict1();
var_dump($conflict1);
$conflict2 = new Conflict2();
var_dump($conflict2);

/*
alias membuat nama lain dari class, function, atau constant dengan menggunakan kata as

Group use, mengimport banyak hal dalam 1 perintah use menggunakan {}
*/

use function Helper\{helpMe as help};

help();
