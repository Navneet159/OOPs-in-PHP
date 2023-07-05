<?php


// PHP OOP - Inheritance

// Inheritance in OOP = When a class derives from another class.
// * The child class will inherit all the public and protected Properties
// * The child class will inherit all the public and protected Methods 
// * it can have its own properties and methods.

// NOTE:- An inherited class is defined by using the "extends" keyword.


// PHP - Inheritance and the Protected Access Modifier ================================================================

class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    protected function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
  }
  
  class Strawberry extends Fruit {
    public function message() {
      echo "Am I a fruit or a berry? ";
    }
  }

  // Try to call all three methods from outside class
$strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
$strawberry->message(); // OK. message() is public
$strawberry->intro(); // ERROR. intro() is protected

// ===============================================================


// class Strawberry extends Fruit {
//     public function message() {
//       echo "Am I a fruit or a berry? ";

//       // Call protected method from within derived class - OK

//       $this -> intro(); // works fine! It is because we call the protected method (intro()) from inside the derived class.
//     }
//   }
  
//   $strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() is public
//   $strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class





// PHP - Overriding Inherited Methods ==================================================================



// Note:- Inherited methods can be overridden by redefining the methods (use the same name) in the child class



// Look at the example below. The __construct() and intro() methods in the child class (Strawberry) will override the __construct() and intro() methods in the parent class (Fruit):

// class Fruit {
//     public $name;
//     public $color;
//     public function __construct($name, $color) {
//       $this->name = $name;
//       $this->color = $color;
//     }
//     public function intro() {
//       echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
//   }
  
//   class Strawberry extends Fruit {
//     public $weight;
//     public function __construct($name, $color, $weight) { // here
//       $this->name = $name;
//       $this->color = $color;
//       $this->weight = $weight;
//     }
//     public function intro() { // here
//       echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
//     }
//   }
  
//   $strawberry = new Strawberry("Strawberry", "red", 50);
//   $strawberry->intro();




// PHP - The final Keyword =================================== FINAL kewword==========================================

// The final keyword can be used to prevent class inheritance or to prevent method overriding.

// final class Fruit {
//     // some code
//   }
  
//   // will result in error
//   class Strawberry extends Fruit {
//     // some code
//   }

// another way

// class Fruit {
//     final public function intro() {

?>



