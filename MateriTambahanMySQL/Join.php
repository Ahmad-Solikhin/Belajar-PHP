<?php
/*
 * Join digunakan untuk melakukan SELECT ke berapa table sekaligus
 * Untuk melakukan JOIN perlu ditentukan table mana yang menjadi referensi di table lainnya
 * Join ini cocok dikombinasikan dengan FK
 * Tapi perlu diingat proses join ini kalo banyak tablenya, maka querynya bakal semakin berat
 * Disarankan jangan lebih dari 5 table
 *
 * */

$sql  = "SELECT * FROM wishlist 
        JOIN productS ON   
        (whistlist.id_product = products.id)"; //Jadi ini nanti data disemua table bakalan keluar

//Misal mau ga semuanya yang keluar
$sql = "SELECT products.id, whislist.id FROM wishlist JOIN products ON (wishlist.id = products.id)";
$sql = "SELECT p.id, w.id FROM wishlist AS w JOIN products AS p ON (w.id = p.id)"; //Ini yang pake AS sehingga lebih pendek

//Join yang lebih dari 2 table
$sql = "SELECT p.id, w.id FROM wishlist AS w JOIN products AS p ON (w.id = p.id) JOIN customers AS c ON (w.id_customer = c.id)";
