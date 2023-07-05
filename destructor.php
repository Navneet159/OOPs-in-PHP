<?php
// Tip: As constructors and destructors helps reducing the amount of code, they are very useful!

// PHP - The __destruct Function

// destruct function starts with two underscores (__)!

// * PHP will automatically call this function at the end of the script.
// *called when the object is destructed or the script is stopped or exited.

class Food{

    //properties
    public $name;
    public $cuisine;


    //CONSTRCUTOR ===============================
    function __construct($cuisine){
        $this->cuisine=$cuisine;
    }
    
    //Method
    function set_name($name){
        $this->name=$name;
    }

    function get_name(){
        return $this->name;
    }

    // DESTRUCTOR ================================
    function __destruct(){
        echo "I love ".$this->cuisine." Foood";
}
}

// creating an object =============================

$chowmein = new Food("Chinese");


?>
