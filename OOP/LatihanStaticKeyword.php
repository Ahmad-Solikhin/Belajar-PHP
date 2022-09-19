<?php

/*
static adalah keyword yang bisa digunakan untuk membuat properties atau function di class yang bisa lgsg dipake
Tanpa harus membuat classnya terlebih dahulu

Namun secara otomatis tidak akan berhubungan lagi dengan objeknya, gabisa dipanggil lewat objek
Cara aksesnya kayak konstan pake "NamaClass"::"NamaStatic"

static function tidak dapat memanggil function biasa lagi, function yang ada di dalam class ga bisa dipanggil
Biasanya ada di class helper atau utility sehingga ga harus dibuat objeknya dulu
*/

class MathHelper
{
    static string $name = "MathHelper";

    static function count(int $first, int $second): int
    {
        return $first + $second;
    }
}

echo MathHelper::$name . PHP_EOL;
//cara rubahnya
MathHelper::$name = "Help Gayn\n";
echo MathHelper::$name;

echo MathHelper::count(5, 6) . PHP_EOL;
