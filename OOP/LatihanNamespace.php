<?php
/*Namespace digunakan untuk menyimpan class-class, namespace bisa nested
Jika ada error di php karena nama class yg sama, namespace ini bisa mengatasi hal tersebut
Gunakan kata kunci namespace untuk membuat namespace, bisa juga dikasih \ kalo nested
*/

namespace Data\One {
    class Conflict
    {
        var string $name = "Gayuh";
    }
}

namespace Data\Two {
    class Conflict
    {
        var string $name = "Ahmad";
    }
}

//Namespace buat function dan konstant

namespace Helper {

    function helpMe()
    {
        echo "HELP ME\n";
    }

    const APP = "Huwalahumba";
}

/*
Global namespace itu kalo ga buat namespace samsek, jadi otomatis masuk global namespace
*/