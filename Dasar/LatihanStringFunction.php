<?php
//join() atau implode() menggabungkan array menjadi string
var_dump(join(", ", ["Ahmad", "Solikhin", "Gayuh", "Raharjo"]));
//explode() memecah string menjadi array
var_dump(explode(" ", "Ahmad Solikhin Gayuh Raharjo"));
//strtoupper
var_dump(strtoupper("ahmad solikhin gayuh raharjo"));
//trim() menghapus whitespace di depan dan belakang string
var_dump(trim("         Gayuh "));
//substr digunakan untuk memotong string yang ingin diambil
var_dump(substr("Gayuh", 0, 2));
