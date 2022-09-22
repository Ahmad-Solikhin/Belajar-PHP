<?php

require_once "Koneksi.php";
/*
 * Relasi dimana table pertama punya banya relasi di table ke dua dan sebaliknya
 * Contohnya adalah relasi anatar produk dan penjualan diaman setiap produk bisa dijual berkali-kali dan setiap penjualan bisa untuk lebih dari satu produk
 * Untuk menyelesaikan relasi ini adalah dengan cara membuat table relasi di tengah relasi many to many
 * Isi table ini akan ada id dari table pertama dan id dari table kedua beserta beberapa attribute tambahan yang diperlukan
 * */
$connection = getConnection();

$sql = "CREATE TABLE orders(
    id INT NOT NULL AUTO_INCREMENT,
    total INT NOT NULL,
    order_date DATETIME NOT NULL DEFAULT current_timestamp,
    PRIMARY KEY (id)
) ENGINE = INNODB";

$sql = "CREATE TABLE orders_details(
    id_product INT NOT NULL,
    id_order INT NOT NULL,
    price INT NOT NULL,
    quantity INT NOT NULL,
    PRIMARY KEY (id_order, id_product)
) ENGINE = INNODB";

$sql = "ALTER TABLE orders_details ADD CONSTRAINT fk_product FOREIGN KEY (id_product) REFERENCES product(id)";

$sql = "ALTER TABLE orders_details ADD CONSTRAINT fk_order FOREIGN KEY (id_order) REFERENCES orders(id)";

$sql = "INSERT INTO orders(total) VALUES (50000)";

$sql = "INSERT INTO orders_details(id_product, id_order, price, quantity) VALUES (1, 1, 1000, 1), (2, 1, 1000, 1)";

//$connection->exec($sql);

$sql = "SELECT * FROM orders JOIN orders_details ON (orders_details.id_order = orders.id)
        JOIN product ON (product.id = orders_details.id_product)";

$statement = $connection->query($sql);

foreach ($statement as $row){
    var_dump($row);
}

$connection = null;

