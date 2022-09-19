<?php
/*
 * Download file menggunakan php, dan mengecek apakah dia bisa donload apa engga
 * Buat maksa client biar download bisa pake header
 * Content-Disposition: inline = ditampilkan di browser
 * Content-Disposition: attachment = Harus di download
 * Content-Disposition: attachment; filename="filename.jpg*/

//header('Content-Disposition: attachment; filename="download.html"');

//Buat download file dari file bisa menggunakna function readfile()
if (isset($_GET['key']) && $_GET['key'] == "rahasia"){
    header('Content-Disposition: attachment; filename="logo dpr.png"'); // ini yang dipake buat ngirim file ke client buat di download
//    header('Contetnt-Type; image/jpeg');
    readfile(__DIR__.'/file/logo dpr.png');
    exit();
} else{

    echo "invalid key";
}
?>
<html>
<head>
<titile>Download HTML</titile>
<body>
<h1>Download HTML</h1>
</body>
</head>
</html>
