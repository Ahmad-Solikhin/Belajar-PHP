<?php
/*
Digunakan untuk encapsulation atau pengemasan data untuk menjaga kerahasiaan dan keamanan
Selain itu juga berfungsi agar datanya tetap terjaga dan tetap valid
Biasanya menggunakan akses modifier private
Getter dan Setter digunakan untuk mengakses properties yang private
*/

class Category
{
    private string $name;
    private bool $expensive;

    function getName(): string
    {
        return $this->name;
    }

    function setName(string $name)
    {
        if (trim($name) != "") {
            $this->name = $name;
        }
    }

    function isExpensive(): bool
    {
        return $this->expensive;
    }

    function setExpensive(bool $expensive)
    {
        $this->expensive = $expensive;
    }
}
