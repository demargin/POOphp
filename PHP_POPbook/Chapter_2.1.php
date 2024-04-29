<?php

/**
 * Object References vs. Copies in PHP
 *
 * In most object-oriented programming languages like Java or Python, assigning
 * an object to a variable or passing it to a function creates a reference to the
 * original object in memory. This means multiple variables can point to the same
 * object, allowing for efficient memory usage.
 *
 * However, in PHP 4 (and earlier versions), assigning an object, passing it as
 * an argument, or returning it from a method resulted in a copy of the object
 * being created. This behavior could lead to increased memory usage and potential
 * performance overhead compared to reference-based object handling.
 *
 * With PHP 5 and later, object assignment and passing work similarly to other
 * OOP languages, using references for efficiency.
 */

//Example Implementation for php 4, 
class User{

    var $name;

    function User($name)
    {
        $this->name = $name;
    }

}

$my_obj = new User('bob');
$other = $my_obj;
$my_obj->name = 'alice';


echo '$my_obj->name = ' . $my_obj->name;
echo "\n-----\n";
echo '$other->name = ' . $other->name;


//Uncomment this for trying the code v5 php versions or earlier
/* class User{

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

}

$my_obj = new User('bob');
$other = $my_obj;
$my_obj->name = 'alice';


echo '$my_obj->name = ' . $my_obj->name;
echo "\n-----\n";
echo '$other->name = ' . $other->name;
 */
?>