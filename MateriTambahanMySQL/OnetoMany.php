<?php

require_once "Koneksi.php";

/*
 * One to many relationship
 * contoh relasinya adalah satu kategory sebuah barang bisa digunakan di banyak produk
 * Buat one to many kayak one to one, tapi FK nya gaperlu unik
 * */

$connection = getConnection();

$sql = "CREATE TABLE category(
    id VARCHAR(10) NOT NULL,
    nama VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
) ENGINE = INNODB";

$connection->exec($sql);

$sql = "CREATE TABLE product(
    id INT NOT NULL AUTO_INCREMENT,
    id_category VARCHAR(10) NOT NULL,
    nama VARCHAR(100) NOT NULL,
    description VARCHAR(100),
    price INT UNSIGNED NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT fk_id_category FOREIGN KEY (id_category) REFERENCES category (id)
) ENGINE = INNODB";

$sql = "INSERT INTO category(id, nama) VALUES ('C01', 'Makanan'), ('C02', 'Minuman')";

$sql = "INSERT INTO product(id_category, nama, price) VALUES ('C01', 'Bakso', 10000), ('C02', 'Teh', 3000)";
$connection->exec($sql);

$sql = "SELECT p.id, p.nama, p.price, c.id AS id_makanan, c.nama AS nama_makanan FROM product AS p JOIN category AS c ON (p.id_category = c.id)";

$statement = $connection->query($sql);

foreach ($statement as $row){
    var_dump($row);
}
$connection = null;