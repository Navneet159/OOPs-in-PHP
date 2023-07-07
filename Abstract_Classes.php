<?php

// PHP OOP - Abstract Classes
// Abstraction is the process of hiding the internal details of an application from the outer world.

// * abstract classes and methods are when the parent class has a named methdo, but needs child classes to fill and complete the task
// * an abstract class is a class that containes at least 1 abstract mehtod
// * an abstract method is a mehtod that is declared but not implemented in the code
// * an abstract class or method is define by "abstract" keyword in prefix(before)

// abstract class Car{
//     abstract function(){
//         //code
//     }
// }

// rules ==================================================================

// when a child class is inherited from an abastract class, following are the rules 

// rule 1) the child class method has to be defined with same name  AND   it redeclares parent abstract method 
// rule 2) the child class method must be defined wtih less restric access modifier
// rule 3) the child class should have atleast [same no. or additional] argumentes as parent class.
// rule 4) the type of "required" argument has to be same 


// Eample ================================================================= [WITH TYPE]

// PARENT class ===========================

// abstract class Tree { // abstract keyword
//     public $name;

//     public function __construct($name){
//         $this->name = $name;
//     }
//     abstract public function message() : string; // setting type  // abstract keyword

// }

// // // child class ---------------------------

// class BigTree extends Tree{

// public function message() : string { // rule no 1,2,3,4 applied
//     return "i give Oyugen save $this->name" ; // using public name property from (parent class)
// }

// }


// // crating object from child class ---------------------------

// $neem = new Bigtree("NEEM");
// echo $neem->message();



// Eample ================================================================= [WITH ARGUMENT]

// abstract class Tree { // abstract keyword
//     public $name;
//     public $production;

//     public function __construct($name){ 
//         $this->name = $name;
//     }
//     abstract protected function message($production); // abstract keyword  // passing argument // access modifier (protected)

// }

// // // child class ---------------------------

// class BigTree extends Tree{

// public function message($production){ // rule no 1,2,3,4 applied // with argument // access modifier to public
 
//     if($production=="good"){
//         echo "very good for enivroment";
//     }else{
//         echo "GO green";
//     }

//     return "i give Oyugen save $this->name" ; // using public name property from (parent class)

// }

// }


// // crating object from child class ---------------------------

// $neem = new Bigtree("NEEM");
// echo $neem->message("good");



// Eample ================================================================= [WITH 2 OPTIONAL Agum.NOT PASSED in PARENT]

abstract class Tree { // abstract keyword
    public $name;
    public $production;

    public function __construct($name){ 
        $this->name = $name;
    }
    abstract protected function message($production); // abstract keyword  // passing argument // access modifier (protected)

}

// // child class ---------------------------

class BigTree extends Tree{

public function message($production, $easyToGrow="Can be easily Grown." ,$climate="Hurray !!! 1 step Forward."){ // rule no 1,2,3,4 applied // with argument //with additonal argument // access modifier to public
 
    if($production=="good"){
        echo "very good for enivroment. {$easyToGrow}";
    }else{
        echo "GO green. {$climate}";
    }

    return "i give Oyugen save $this->name" ; // using public name property from (parent class)

}

}


// crating object from child class ---------------------------

$neem = new Bigtree("NEEM");
echo $neem->message("good");


?>