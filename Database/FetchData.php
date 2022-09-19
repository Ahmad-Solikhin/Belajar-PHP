<?php
/*
 * Sebagai solusi penggunaan fetch data tanpa menggunakan foreach
 * Hal ini bisa digunakan dengan fetch(), jadi gausah nunggu lama buat perulangan
 * fetch() ini sama kayak next perulangan, jadi fetch() pertama untuk data pertama dan selanjutnya
 * Ketika tidak ada data lagi, maka return valuenya adalah false
 * Kalo mau narik semuanya bisa pake fetchAll() untuk mendapatkan array tanpa perlu perlungan foreach*/

require_once __DIR__."/GetConnection.php";

$connection = getConnection();

$username = "amanda";
$password = "bear";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$statement = $connection->prepare($sql);
$statement->execute([$username, $password]);

if ($row = $statement->fetch()){
    echo "Berhasil login ke : {$row['username']}\n";
    var_dump($row);
}else{
    echo "Tidak dapat ditemukan username : $username\n";
}

//Gada datanya lagi jadi 0
var_dump($statement->fetch());

//fetchAll() digunakan untuk mengambil semua data
$sql = "SELECT * FROM customer";
$statement = $connection->query($sql);
$result = $statement->fetchAll(); //Digunakan untuk menarik semua data yang ada sesuai dengan query nya
var_dump($result);

$connection = null;
