<?php


// PHP OOP - Static Methods

// STATIC =  it belongs to the class, rather than a specific instance ----------------------------

// * Static methods can be called directly - without creating an instance of the class 
// * Static methods are declared with the "static" keyword



// Example ==================================================
// class ClassName {
//     public static function staticMethod() {
//       echo "Hello World!";
//     }
//   }

// SYNTAX
// ClassName::$staticMethod;



// WAYS TO ACCESS STATIC METHOD are [3] ===============================

// 1) in the same class using the "self" keyword and double colon (::)
// 2) from methods in other classes. To do this, the static method should be "public"
// 3) from a child class +  the static method can be public or protected. + use the "parent" keyword inside the child class.





// 1) in the same class using the "self" keyword and double colon (::) =====================================

// class BestWishes{
    
//     public static function wish1(){
//        echo "All the best";
//     }
    
//     public function __destruct(){

//         self::wish1();  // using "self' keyword

//     }

// }

// new BestWishes; // without creating an instance of class







// 2) from methods in other classes. To do this, the static method should be "public" =================================================

// class BestWishes{
    
//     public static function wish1(){
//        echo "All the best 2nd type";
//     }

//     }


// class SendWIshes{

//     public function fromAnotherClass(){

//         BestWishes::wish1();  // from methods in other classes

//     }
// }


// $wish = new SendWishes();
// $wish->fromAnotherClass();






// 3) from a child class +  the static method can be public or protected. + use the "parent" keyword inside the child class. =================================


//PARENT
class BestWishes{
    
    public static function parentWish(){ //the static method can be public or protected
       echo "All the best 3rd type";
    }

    }

//CHILD
class SendWIshes extends BestWishes {

public $newWish;

    public function fromParentClass($newWish){

      $this->newWish= parent::parentWish(); // use the "parent" keyword inside the child class

    }
}


$wish = new SendWishes();
$wish->fromParentClass("navneet");


?>
