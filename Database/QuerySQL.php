<?php
/*
 * Cara melakukan query yang mengembalikan data seperti select menggunakan function query(sql)*/

require_once __DIR__."/GetConnection.php";

$connection = getConnection();
//$sql = "SELECT id, name, email FROM customer";
$sql = "SELECT * FROM customer";

//Return dari query adalah PDO statement
$statement = $connection->query($sql);

//Cara display hasil querynya menggunakan IteratorAggregate, jadi bisa pake foreach

foreach ($statement as $row) {
    //Haislnya ada yang indeksnya pake nama atribute sama ada yang pake index
    var_dump($row);
}

$connection = null;