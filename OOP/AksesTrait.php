<?php
require_once "LatihanTrait.php";

$person = new Person();

$person->goodBye(null);
$person->goodBye("Gayuh");
$person->name = "Amanda";
$person->run();

$people = new People();
$people->name = "Ahmad";
var_dump($people);

// $human = new Human();
// $human->goodBye(null);
