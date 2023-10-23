<?php
// OOP stands for Object-Oriented Programming.

// Procedural programming is about writing procedures or functions that perform operations on the data, while object-oriented programming is about creating objects that contain both data and functions.

// how to call the class object

// class class1{
//     function test (){
//         echo"Hello Keyur";
//     }
// }

// // first we have to create an object using new key word
// $obj = new class1;
// // second we have to use (->) this arrow operator to call
// $obj->test();

// A constructor allows you to initialize an object's properties upon creation of the object.

// If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

// Notice that the construct function starts with two underscores (__)!

// class fruit
// {
//     public $name;
//     public $color;

//     function __construct($name)
//     {
//         $this->name = $name;
//     }
//     function get_name(){
//         return $this->name;
//     }
// }

// $apple = new fruit("Apple <br />");
// echo $apple->get_name();
// $apple = new fruit("banana <br />");
// echo $apple->get_name();
// $apple = new fruit("chilli <br />");
// echo $apple->get_name();
// $apple = new fruit("mango <br />");
// echo $apple->get_name();


// Inheritance in OOP = When a class derives from another class.

// The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

// An inherited class is defined by using the extends keyword.

class cars {
    public $name ;
    public $model;
    public function __construct($name,$model) {
        $this->name = $name ;
        $this->model = $model;
    }
    public function intro(){
        echo "This is {$this->name} and model is {$this->model}. <br />";
    }
}

// class for tata
class tata extends cars {
    public function msg (){
        echo "im a TATA punch";
    }
}

$bmw = new cars("BMW","SUV");
$bmw->intro();

$tata = new tata("TATA","PUNCH");
$tata->intro();
$tata->msg();
?>