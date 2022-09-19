<?php

require_once "LatihanGetterSetter.php";

$category = new Category();
$category->setExpensive(true);
$category->setName("Gold");

$category->setName("");
?>

<h1> <?php echo "Name : {$category->getName()}\n"; ?></h1>
<h1> <?php echo "Expensive : {$category->isExpensive()}\n";?></h1>
