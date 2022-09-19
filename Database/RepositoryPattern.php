<?php
/*
 * Manipulasi data database dibuat sebuah class untuk repository yang digunkana sebagai komunikasi antara database dan aplikasinya
 * Jadi nanti semua perintah SQL akan ditulis dalam rpository,sehingga kita tinggal memanggil tanpa harus menulisnya dalam logic code nya
 * Biasanya repositorynya akan dibuat dalam interface dengan menggunakan entity/model
 * Lalu dibuat impementasi class nya, dimana PDO akan digunakan disini
 * Jadi jika ingin query, dibandingkan mengembalikan array lebih baik dikembalikan dalam model atau entity object nya*/



