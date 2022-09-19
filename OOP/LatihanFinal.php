<?php
/*
Final class berarti classnya gabisa diwarisin

*/

class SocialMedia
{
    final function getFriend(string $name)
    {
        echo "Hello friend $name\n";
    }
}

final class Facebook extends SocialMedia
{
    // function getFriend(string $name) Jadi gabisa di override
    // {
    //     echo "Hello friend $name\n";
    // }
}

// class FakeFacebook extends Facebook ini jadi error
// {
// }

/*
Final function. funtion tersebut tidak bisa di override ke turunannya
*/
