<?php

/*
 * Redirect secara otomatis ke domain yang berbeda dan setelah selesai bisa kembali lagi
 * untuk melakukan redirect membutuhkan header location yang berisi redirect
 * Kalo ke halaman yang sama = /admin.php =>
 * Kalo ke domain berbeda https://www.google.com =>
 * */
//header("application: Gayuh");
header("Location: /php-info.php");
exit();