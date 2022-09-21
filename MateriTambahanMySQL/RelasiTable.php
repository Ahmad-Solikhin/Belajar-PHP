<?php
//Table on to one relationship, relasi table yang sangat sederhana
//One to One ini jika udah dimiliki 1 gabisa dimiliki orang lain
//Contohnya 1 orang hanya boleh punya 1 rekening di bank a dengan namanya dan 1 rekening di bank tersebut hanya boleh dimiliki 1 orang
//Cara buatnya adalah dengan cara mengset FK nya menjadi UNIQUE
//Ada cara lain yaitu dengan membuat table dengan nilai PK yang sama, misal id customer 1 maka id rekening jugaq harus 1

$sql = "CREATE TABLE wallet
        (
           id INT NOT NULL AUTO_INCREMENT,
           id_customer INT NOT NULL,
           balance INT NOT NULL DEFAULT 0,
           PRIMARY KEY (id),
           UNIQUE KEY id_customer_unique (id_customer),
           FOREIGN KEY fk_wallet_customer (id_customer) REFERENCES customer (id)             
        ) ENGINE = InnoDB";

