<?php
/*
 * Dalam DBMS ada namanya fitur populer relasi anatar table
 * Ada yang namanya Foriegn Key yang digunakan sebagai referensi ke table lainnya
 * Bisa terdapat 1 atau lebih foreign key di sebuah table
 * Membuat foreign key sama kayak membuat attribute seperti biasanya, hanya saja perlu diberi tahu kalo MySQL itu adalah foreign key
 *
 * */


//Tipe data dan panjang FK harus sama dengan PK di tablenya
$sql = "CREATE TABLE wishlist
(
    id INT NOT NULL AUTO_INCREMENT,
    id_product VArchar(10) NOT MULL,
    description TEXT,
    PRIMARY KEY (id),
    CONSTRAINT fk_wishlist_product FOREIGN KEY (id_product) REFERENCES products (id)
) ENGINE = InnoDB;";

//Untuk menghapus foreign key nya bisa pake
$sql = "ALTER TABLE whislist DROP CONSTRAINT fk_whistlist_product";

//Untuk menambhakan foreign key bisa pake
$sql = "ALTER TABLE whislist ADD CONSTRAINT fk_whislist_product FOREIGN KEY (id_product) REFERENCES productS (id)";

//Keuntungan dari FK ini dapat memastikan data yang dimasukkan ada di tablenya
//Kalo dihapus data yang memiliki id yang jadi FK di table lain, maka hal tersebut akan ditolak
//Tapi fitur ini bisa diubah dengan beberapa mode
//- RESTRICT, mode default yang akan menolak = ON DELETE(ditolak), ON UPDATE(ditolak)
//- CASCADE = ON DELETE(data dihapus), ON UPDATE(data dirubah)
//- NO ACTION = ON DELETE(dibiarkan), ON UPDATE(dibiarkan), nanti reference nya akan diuputus jadi gada FK
//- SET NULL = ON DELETE(null), ON UPDATE(null)
$sql = "ALTER TABLE whislist ADD CONSTRAINT fk_whislist_product FOREIGN KEY (id_product) REFERENCES productS (id) ON DELETE CASCADE ON UPDATE CASCADE ";



