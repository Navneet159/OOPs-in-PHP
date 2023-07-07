<?php

// PHP Namespaces

// Namespaces = a set of signs (names) that are used to identify and refer to objects of various kinds


// Namespaces are qualifier that solve 2 problems
// problem 1) they help in organizing by grouping classes working on a same task 
// problem 2) you can use the same name for multiple classes





// NOTE :- using the "namespace" keyword & 1st thing in php ***

// echo "Hello World!";
// namespace Html; // keyword and first thing in php
// ... // rest of the code




// EXAMPLES =====================================================================

// namespace Furniture;

// class Chair{

//     public $name="";
//     public $type="";
//     public $units=0;

//     public function order(){

//         echo "Big order is on the way for  Product Name = {$this->name} ,  Product Type = {$this->type} and  Product Units = {$this->units} ";

//     }


// }

// $order = new Chair();  // go to index.php to run the code in browser // note :- class is called here !!



// =====================================================================================






// nested namespaces ===================================================

// namespace Parent\Child; // "Child" namespace inside "Parent" namespace




// NOTE :-Any code that follows a namespace declaration is operating inside the namespace, so classes that belong to the namespace can be instantiated without any qualifiers. To access classes from outside a namespace, the class needs to have the namespace attached to it.

// Using Namespaces in different ways


// 1)

namespace Furniture;

class Chair{

    public $name="";
    public $type="";
    public $units=0;

    public function order(){

        echo "<p> Product Name = {$this->name} ,  Product Type = {$this->type} and  Product Units = {$this->units} </p> "; 

    }

}


class Table{

    public $units = 0;
 
    public function value(){
        
     echo "also inclued {$this->units} tables";

    }
} 



?>
