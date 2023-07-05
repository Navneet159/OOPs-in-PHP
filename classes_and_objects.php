
<!-- //A class is a template for objects, and an object is an instance of class.

// OOP Case

// for example in FRUTIS
// *apple and mango both are fruits 
// *therefor lets assume we have a class of fruits
// *both have common properties like color. apple is red and mango is yellow.
// *we can define a variable $color to store value of the property color
// *same can be done for diff properties which are common


// Define a Class =========================================

// Note: In a class, variables are called properties and functions are called methods! -->
<?php
// CLASS is defined by using the "class" keyword 
// NAME of class is comes after "class" and "{}"

class Fruit{

//properties (variables) 
    public $name;
    public $color;
//functions (methods)

function set_name($name){
    $this->name=$name;
}

function get_name(){
    return $this->name;
}
}

// <!-- Define Objects ====================================== -->

// <!-- 
// * Objects of a class are created using the "new" keyword.
// * Classes are nothing without objects!
// * We can create multiple objects from a class.
// * Each object has all the properties and methods defined in the class
// * but they will have different property values. -->

//crating 1st object==============================================

$apple = new Fruit();
$apple->set_name('Apple');
// echo $apple->get_name();


//crating 2nd object===============================================

$mango = new Fruit();
$mango->set_name("Mango");
// echo $mango->get_name();


// <!-- PHP - The $this Keyword ====================================
// * only available inside methods
// * The $this keyword refers to the current object
//  -->

class Car{
    // properties
   public $type;
}

$scorpio = new Car();

// to changee the value of the $type property?

// There are 2 ways:

// 1) seen above by defining method inside of class 
// (y adding a set_name() method and use $this    

// function set_type($type){
//     $this->type=$type;
// }

// 2)Outside the class (by directly changing the property value)

$scorpio->$typetype="SUV";

echo $scorpio->$type;

// NOTE

// $this->name refers to the current class's variable name
// $this->$name refers to the class variable of whatever the value of $name is

// When using $this->name, you are accessing the property with the name name of the current object.
// When using $this->$name, $name is determined before accessing the property -- which means you'll access the property which name is contained in the $name local variable.
?>