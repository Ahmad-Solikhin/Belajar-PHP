<?php

include "lib/Function.php";

//required adalah mengambil php lain, tapi kalo gada error
echo sayHello("Ahmad", "Solikhin") . PHP_EOL;

//include adalah mengambil php lain, tapi kalo gada cuma warning

//required_once dan include_once

$nama = "Gayuh";

function sayHi()
{
    //Selain pake global $name; bisa juga menggunakan $GLOBALS karena semua variable yang global akan disimpan dalam array $GLOBALS
    echo "Hallo {$GLOBALS['nama']}\n";
}

sayHi();

//Static scope dapat menyimpan variable dari value sebelumnya ketika function tersebut dipanggil
function increment()
{
    static $score = 1; //Ketika sudah dipanggil tidak akan dibuat variable baru lagi dengan nilai 1

    echo "Scorenya adalah : $score\n";

    $score++;
}

increment();
increment();
