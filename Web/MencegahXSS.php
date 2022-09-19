<?php
/*
 * Digunakan function htmlspecialchars(value)
 * Secara otomatis akan dilakukan encode
 * */

$say = "Hello ". htmlspecialchars($_GET["name"]) // Menjadi lebih aman;

?>

<html>
<body>
<h1><?= $say ?></>
</body>
</html>
