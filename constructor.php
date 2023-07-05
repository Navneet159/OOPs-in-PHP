<?php

// PHP - The __construct Function

// NOTE starts with two underscores (__)!

// * it is automatically called when creating object from cLass
// * it allows you to initialize an object's properties upon creation of the object.

class Bike{

    // Properties=========================================

    public $brand;
    public $model;


    // CONSTRUCTOR=======================================

    function __construct($brand){
        $this->brand = $brand;
    }

    // Method=============================================

    function get_brand(){
       return $this->brand;
    }

    function set_model($model){
        $this->model=$model;
    }

    function get_model(){
        return $this->model;
    }
}


// CREATING NEW OBJECT=======================================

$pulsar = new Bike("Hero Honda");
echo $pulsar->get_brand(); // Hero Honda

$pulsar->set_model("200 NS");
echo $pulsar->get_model(); // 200NS

// Tip: As constructors and destructors helps reducing the amount of code, they are very useful!
?>
