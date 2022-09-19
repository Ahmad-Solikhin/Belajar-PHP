<?php
require_once "LatihanAbstrakClass.php";

// $location = new Location(); error karena Location itu abstract class

$country = new Country();
$country->name = "Indonesia";

$country->introduce("Gayuh");
