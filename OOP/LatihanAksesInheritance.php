<?php
require_once "LatihanInheritance.php";

$vp = new VicePresident();
$vp->alamat = "Bekasi";
$vp->name = "Gayuh";

var_dump($vp);

$vp->sayHelloAdd("Amanda");
