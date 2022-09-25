<?php

//Cross join ini bisa dipake buat perkalian antar table

require_once "Koneksi.php";

$connection = getConnection();

$sql = "CREATE TABLE numbers(id INT NOT NULL, PRIMARY KEY (id)) ENGINE = INNODB";

$sql = "INSERT INTO numbers(id) VALUES (1),(2),(3)";
//$connection->exec($sql);

$sql = "SELECT * FROM numbers AS num1 CROSS JOIN numbers AS num2 ORDER BY num1.id, num2.id";
$statement = $connection->query($sql);

foreach ($statement as $row){
    var_dump($row);
}

$connection = null;