<?php

require_once "LatihanInterface.php";

$avanza = new MiniBus("Avanza");
$avanza->setBrand("Toyota");
$avanza->drive();
echo $avanza->getBrand(), " ", $avanza->isMaintenance(), PHP_EOL;
