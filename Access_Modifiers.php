<?php

// PHP - Access Modifiers

// Access = the chance or right to use or have something
// Modifiers =changes its meaning in some way




// 3 TYPES

// 1) public [default] - the property or method can be accessed from everywhere.[ this is default ]

// 2) protected - the property or method can be accessed within the class and by classes derived from that class

// 3) private - the property or method can ONLY be accessed within the class


class Space{

    public $publicPark;
    protected $home;
    private $room;

}

$availabeSpace = new Space();

echo $availabeSpace->publicPark = "Public is Ashok udhyan"; // OK
// echo $availabeSpace->home = "Personal is Myhome";// ERROR
// echo $availabeSpace->room = "Private is myroom "; // ERROR



// *******************************

// NOTE:- even if all the properties are public BUT , Methods are (protectd !! private) will throw errow when used

// *******************************
?>
