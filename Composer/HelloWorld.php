<?php

//Ysng perlu di include hanya autoloadnya ini doang kalo pake composer
require_once  __DIR__."/vendor/autoload.php";

use Code\Coba\People;

$people = new People("Raharjo");
$people->sayHello("Gayuh");