<?php

// PHP - Class Constants
// * class constant are useful to define constant data within a class
// * class constant is defined using "const" keyword within a class
// * they are case sensitive.
// * class contantat should be named in all UPPERCASE

class GoodBye{

    const MESSAGE = "there is no goodbye"; //class constant declared with "const" and in UPPERCASE letter 

// Accessing class constant 

// 2 ways = 
// note :- scope resolution operator (::)



// mehtod===========

// 1) from inside (creating an OBJECT)
// note:- using the "self" keyword 

public function sayBye(){
    echo self::MESSAGE;
}

}

$saybyebye = new Goodbye();
$saybyebye->sayBye();



// 2) from outside (not creating an OBJECT)
// echo GoodBye::MESSAGE;



?>
