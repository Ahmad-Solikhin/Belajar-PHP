<?php
//properties di Class harus ada var nya untuk variable

class LatihanPerson
{
    //Dapat ditambahkan type declaration setelah var dengan mencantumkan tipe datanya
    var string $name;
    var string $address;
    var string $country;
    var int $age;
    var string $jenis = "Manusia"; // Digunakan sebagai default value
    var ?string $email; //Menambahkan tipe data yang bisa null atau nullable dengan cara menambahkan tanda ?
    //Bisa dipake buat type declaration function juga

    //constan di php baru
    const GENDER = "Laki-Laki";

    //construcor dalam php make __construct()
    public function __construct(string $name, ?string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    //Menambahkan function pada classnya
    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hallo {$this->name}\n";
        } else {
            echo "Hallo $name, my name is {$this->name}\n";
        }
    }

    function sayHelloFinal()
    {
        return "Hallo {$this->jenis} {$this->name}\n";
    }

    //destructor adalah function yang akan dipanggil ketika objek dihapus dari memori dengan menggunakan __destruct, gaboleh pake parameter
    //Bisa digunakan untuk menutup koneksi database dan proses menulis ke file
    function __destruct()
    {
        echo "This {$this->name} is destroyed\n";
    }
}

class Author
{
    const AUTHOR = "Ahmad Solikhin Gayuh Raharjo";

    function infoAuth()
    {
        echo "Author : ", self::AUTHOR, PHP_EOL;
    }
}
