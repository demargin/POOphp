<?php
/**
 * Its said that an object is a data that has been structured according
 * to the template defined in a class, an object is said to be an instance
 * of its class. It its of the type of deined by the class.
 */

class ShopProduct{
    //empty
}

$product1 = new ShopProduct();
$product2 = new ShopProduct();


/**
 * At first sight the $product1 and $product2 looks identical, but is not, because 
 * as many producst are made from the same mold each one has its unique serial number
 * and similar to that, our objects have their unique identifier, and we can demostrate that,
 * so for that we use var_dump, run it and you will obtain their unique identifiers.
 */
var_dump($product1);
var_dump($product2);

?>