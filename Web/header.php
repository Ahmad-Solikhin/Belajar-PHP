<?php
/*
 * Dari request dan response terdapat data yang bernama Header
 * Header digunakan sebagai tempat menyimpan informasi tamahan dari URL, METHOD, dan Body
 * Header yang dikirim akan secara otomatis dimasukkan ke global variable $_SERVER
 * namun key untuk header akan menjadi uppercase dan -, diubah menjadi _
 * Akan ditambahkan prefix HTTP_ untuk membedakan
 * Bisa menambahkan header dengan function header(key:value)
 * Digunakan sebelum body atau sebelum di tag html nya*/

header("application: Ahmad Solikhin");
header("author: Gayuh");

$client = $_SERVER["HTTP_CLIENT_NAME"];

echo "Hello $client";

