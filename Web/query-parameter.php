<?php

/*
 * Informasi tambahan yang bisa dikirimkan ke client secara dinamis
 * untuk query cukup gunakan ? diikuti dengan key=value
 * quey ini akan disimpan ke global variable $_GET
 * $_GET merupakan array yang berisi key dan value sesuai dengan query parameternya
 * Karena ini dikirim oleh client, jadi harus di cek datanya ada atau tidak
 * query parameter bisa lebih dari satu menggunakan tanda &
 * Bisa mengirim data lebih dari satu dan nantinya akan dikonversi menjadi array dengan cara menggunakan []
 * misal name[]=Gayuh&name[]=Raharjo maka akan menajdi name = [Gayuh, Raharjo*/
$say = (isset($_GET['name'])? "Hello {$_GET['name']}" : "Hello");
//$say = "Hello";
//$sayMultiple = "Hello {$_GET['name']}, i'm from {$_GET['location']}";
//$sayName = "Hello ". $_GET["name"];

$numbers = $_GET['numbers'];
$total = 0;

foreach ($numbers as $number){
    $total += $number;
}
?>

<htm>
    <body>
    <h1><?= $say ?></h1>
    <br>
    <h1>Total = <?= $total ?></h1>
    </body>
</htm>
