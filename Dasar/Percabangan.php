<?php
//Menggunakan if statement
$nilai = 71;
$absen = 80;

if ($nilai > 70 && $absen > 80) {
    echo "Kamu lulus\n", PHP_EOL;
} elseif (($nilai >= 70 && $absen > 80) || ($nilai > 70 && $absen >= 80)) {
    echo "Kamu harus remedial\n";
} else {
    echo "Kamu tidak lulus\n";
}


// bisa pake titik dua kayak python buat if statement cuma harus pake endif diakhir 

if ($nilai > 70) :
    echo "Kamu lulus\n";
endif;

// switch, cuma bisa pake ==
$huruf = "A";

switch ($huruf) {
    case ("A"):
        echo "Nilai sempurna";
        break;
    case ("B"):
        echo "Baik";
        break;
    default:
        echo "Jelek";
}
echo PHP_EOL;

//Kayak python
switch ($huruf):
    case ("A"):
        echo "Nilai sempurna";
        break;
    case ("B"):
        echo "Baik";
        break;
    default:
        echo "Jelek";
endswitch;
echo PHP_EOL;

//Ternary Operation menggunakan kata kunci ? dan :
$gender = "L";
$hi = null;

$hi = $gender == "L" ? "Hi Bro\n" : "Hi Nona\n";

echo $hi;

//null coalescing operator untuk mengecek sebuah variable menggunakan ??
$data = ["action" => "create"];

$action = $data["action"] ?? "nothing";
echo $action, PHP_EOL;
