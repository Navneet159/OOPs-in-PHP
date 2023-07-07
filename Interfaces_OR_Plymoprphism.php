<?php

// PHP - What are Interfaces? ==============================================================

// *a programming structure/syntax that allows the computer to enforce certain properties on an object (class).
// * Interfaces allow you to specify what methods a class should implement.
// * Interfaces make it easy to use a variety of different classes in the same way.

// polymorphism = When one or more classes use the same interface  [***]

// note : Interfaces are declared with the interface keyword




// syntax example
// <?php
// interface InterfaceName {
//   public function someMethod1();
//   public function someMethod2($name, $color);
// }




//    PHP - Interfaces vs. Abstract Classes ==================================================

//                   INTERFACE   vs   ABSTRACT CLASSES
               
// * properties      NO           |    YES
                                    
// * methods         public       |    public & protected
//   access modi.                 | 
                                       
// * methods         abstract     |    -
//                   (keyword     |
//                   not necssary)|
                                  
// * inheritance     -            |    can inherit from
//                                |    parent class (while inherting)




// PHP - Using Interfaces =======================================================================

// NOTE :- to implemet interface a class must use "implements" keyword

interface Office{ // interface keyword
    
    public function currentWork();

}

// impletmenting interface in class

class Work implements Office{

    public function currentWork(){
        echo "Navneet is working on OOPS in PHP";
    }

}

// creating an onject using above class

$navneet = new Work();
$navneet->currentWork();



?>
