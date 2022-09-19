<?php
/*
 * Harus nonton materi ini di course yt di mysql
 *
 * Melakukan database transaction menggunakan bantuan PDO
 * Secara otomatis semua query yang dikirimkan menggunakan PDO akan otomatis di commit atau disimpan secara permanen di database
 * Namun bisa menggunakan fitur transaction untuk melakukan hold querynya terlebih dahulu
 * beginTransaction() merupakan function yang bisa digunakan untuk memulai transaction di PDO
 * commit() digunakan untuk melakukan commit atau menyetujui querynya
 * Dan bila ingin ingin membatalkan transaksi yang belum di commit bisa menggunakan rollback()*/

require_once __DIR__."/GetConnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('huwaa', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('huwaa', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('huwaa', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('huwaa', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('huwaa', 'hi')");

//Digunakan untuk melakukan commit transaction
//$connection->commit();

//Untuk membatalkan bisa menggunakan perintah dibawah
$connection->rollBack(); //Walaupun dibatalkan, namun id auto increment nya akan terus bertambah naik

$connection = null;
