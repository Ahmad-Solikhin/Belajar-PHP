<?php
/*
 * Untuk mengetahui id terakhir yang dimasukkan bisa dibantu oleh PDO sehingga tidak diperluka query kedua kalinya
 * lastInserdId() akan mendapatkan id query yang terakhir*/

require_once __DIR__."/GetConnection.php";

$connection = getConnection();

$sql = "INSERT INTO comments(email, comment) VALUES ('ahmadsgr39@gmail.com','hi')";
$connection->exec($sql);
$id = $connection->lastInsertId(); //Digunakan untuk mengetahui id terakhir yang dimasukkan

var_dump($id);

$connection = null;