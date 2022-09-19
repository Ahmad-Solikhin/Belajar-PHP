<?php

require_once "LatihanException.php";
require_once "Validasi.php";

$akun1 = new LoginRequest();
$akun1->password = "null";
$akun1->username = "gayuh";
var_dump($akun1);

validateLoginRequest($akun1);

/*
Digunakan agar aplikasi tetap berjalan walau terjadi exception menggunakan try catch
*/

$akun2 = new LoginRequest();

try {
    validateLoginRequest($akun2);
} catch (ValidationException $exception) {
    echo "Error : {$exception->getMessage()}\n";
} catch (Exception $exception) {
    echo "Error : {$exception->getMessage()}\n"; //Multiple catch jika exceptionnya berbeda
}

// catch (ValidationException | Exception $exception){  //Hal ini digunakan jika exceptionnya mau sama  
//     echo "Error ; {$exception->getMessage()}\n";
// }

/*
Block finally yang akan tetap diakses walaupun terjadi exception atau tidak
*/

$akun3 = new LoginRequest();
$akun3->password = "";
$akun3->username = "Huwaa";

try {
    validateLoginRequest($akun3);
} catch (ValidationException | Exception $exception) {
    echo "Error : {$exception->getMessage()}\n";

    var_dump($exception->getTrace()); //Digunkana untuk mengetahui lokasi error
    echo $exception->getTraceAsString() . PHP_EOL;
} finally {
    echo "Tetep jalan\n";
}

/*
Debug Exception digunakan untuk melakukan debug yang berisikan lokasi dimana terjadi error
Menggunakan getTrace
*/
