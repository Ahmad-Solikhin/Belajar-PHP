<?php
/*
 * Mengirim data ke browser tanpa berhubungan dengan tampilan browser dan disimpan oleh client bisa disebut cookie
 * Misal ngirim cookie dengan http response yang akan disimpan browser, request selanjutnya akan dikirimkan oleh server
 * Di php cara set cookie bisa lebih mudah menggunakan setcookie()
 * Cookie ini bagian dari header, jadi diset sebelum di render di php
 * Untuk baca cookie yang dikirim oleh client bisa menggunakan $_COOKIE*/

setcookie('X-BELAJAR-COOKIE', 'Ahamd Solikhin Gayuh Raharjo');

header('Location: show-cookie.php');