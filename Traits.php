<?php

// PHP OOP - Traits ===============================================


// TRAIT = a quality that forms part of your character or personality

// * PHP only supports single inheritance
// * means a child can have only ONE SINGLE PARENT (can only inherit from a single parent)
// * USING php oop Trait = a class inherit multiple behaviour



// TRAIT
// * declared with "trait" keyword
// * used to declare methods that can be used in multiple classes
// * trait can have methods and "abstract methods"
// * methods can have all 3 access modifiers



// Example ===================================================

trait Hardworking{

    public function msg(){
        echo "work harder and smarter";
    }

}

// note :- To use a trait in a class, use the "use" keyword

class Sports{
    use Hardworking;
}


$dhoni = new Sports();
$dhoni->msg();


// ?>
