<?php

function getConnection(): PDO
{
    $host = "localhost";
    $port = 3306;
    $database = "belajar_php_database";
    $username = "root";
    $password = "";

//Ini cara membuat object PDO nya
//$connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
//echo "Koneksi Sukses\n";

//PDO exception bisa digunakan untuk menangka-p exception dan bisa dilakukan try catch sehingga jika terjadi error program teteap jalan

    try {
        $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
        return $connection;
//        echo "Koneksi Sukses\n";

        //Untuk menutup koneksi di PDO bisa langsung diubah variabel koneksinya menjadi null
//        $connection = null;
    }catch (PDOException $exception){
        return "Koneksi gagal : {$exception->getMessage()}\n";
    }

//Kalo udah selesai menggunakan koneksinya lebih baik koneksi tersebut ditutup, karena ada batasan untuk membuka koneksi
}
