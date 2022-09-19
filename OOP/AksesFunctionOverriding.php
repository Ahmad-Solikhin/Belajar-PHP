<?php

require_once "LatihanFunctionOverriding.php";



$manager = new Manager();
$manager->name = "Gayuh";
$manager->sayHello("Amanda");
var_dump($manager);

$vp = new VicePresident();
$vp->sayHello("Amanda");
$vp->sayHelloParent("Embul");
var_dump($vp);
