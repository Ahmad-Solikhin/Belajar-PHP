<?php
/*
 * Di PDO bisa pake function exexute yang nantinya akan di jalankan oleh PDO, ini bisa digunkaan untuk segala jenis SQL
 * Tapi ini gada return resultnya, jadi biasanya ini digunkaan untuk create table, insert, update, delete, alter table, dsb
 * Tapi biasanya DDL jangan dilakukan di phpnya, tapi disarankan buat migration tool
 * DI PHP hanya berfokus pada DML*/