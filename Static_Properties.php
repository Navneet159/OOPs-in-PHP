<?php

// PHP OOP - Static Properties

// STATIC =  it belongs to the class, rather than a specific instance ----------------------------

// * can be called directly with creating an instance of a class
// * static properties are called with "static" keyword



// class ClassName {
//     public static $staticProp = "Example of static property";
//   }



// SYNTAX
// ClassName::$staticProp;



// to call a static property - 3 WAYS =============================================================

// 1) within the same class by className and "::"
// 2) a static property can be accessed by method in same calls - using "self" keyword  and  "::"
// 3)  to call a static property from/In child class , use "parent" keyword 



// EXAMPLES =========================================================================================

// 1) within the same class by className and "::"

// class Hour{
//     public static $hourValue = "60 min";
// }

// echo Hour::$hourValue;



// 2) a static property can be accessed by method in same calls - using "self" keyword  and  "::"

// class Min{
//     public static $minValue="60 seconds";

//     public function value(){
//         echo self::$minValue;
//     }
// }

// // creaitng instance

// $instance = new Min();
// $instance->value();




// 3)  to call a static property from/In child class , use "parent" keyword 


// class ParentClass{
//     public static $value="this is Parent class property";
// }

// class ChildClass extends ParentClass{
//     public function parentValue(){
//         echo parent::$value;
//     }
// }


// // creaitng instance

// $child = new ChildClass();
// $child->parentValue();


?>
