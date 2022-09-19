<?php
//Bisa kayak python juga pake :
for ($i = 0; $i < 10; $i++) {
    echo "Infinie ke-", $i + 1, "\n";
}

//While loop

$x = 0;

while ($x < 10) :
    echo "Angka ke-", $x + 1, PHP_EOL;
    $x++;
endwhile;

//Do While loop minimal dijalankan 1 kali

$y = 5;

do {
    echo "do while ke-", $y + 1, PHP_EOL;
    $y++;
} while ($y < 5);

//break dan continue
$counter = 0;
//tidak mencetak angka 5
for ($counter; $counter < 10; $counter++) {
    if ($counter == 4) {
        continue;
    }
    echo "Angka ke-", $counter + 1, PHP_EOL;
}

//for each loop
$names = ["Ahmad", "Solikhin", "Gayuh", "Raharjo"];
foreach ($names as $nama) {
    echo "Nama saya adalah $nama \n";
}

foreach ($names as $key => $value) {
    echo "$key dan $value \n";
}
