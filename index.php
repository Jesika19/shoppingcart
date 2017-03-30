<?php 

//Add classes
require 'Cart.php';
require 'Product.php';
require 'Clothing.php';
require 'Food.php';

$cartOne = new Cart();


/*Food*/
$foodItemOne = new Food("F1","Food","Wine","red",12,"12/01/20");
$foodItemTwo = new Food("F2","Food","Juice","red",10,"12/01/18");

/*Clothing*/
$clothingItemOne = new Clothing("C1","Clothing","Jean","Blue",30,"small","Blue","Skinny");

/*Add,Update and Remove products */

//Add
$cartOne->addProduct($foodItemOne,6);

$cartOne->addProduct($foodItemTwo,4);

$cartOne->addProduct($clothingItemOne,2);

//Update
$cartOne->updateProduct($foodItemOne,2);

//Remove
$cartOne->removeProduct($foodItemTwo);

//Calculate total
$cartOne->calculateTotal();

//Calculate subTotal
$cartOne->calculateSubTotal(10);

$products = $cartOne->getProducts();
$totals = $cartOne->getTotal();

$subTotals = $cartOne->getSubTotal();

print_r($products);
//echo PHP_EOL;
print_r($totals);
//echo PHP_EOL;
print_r($subTotals);

?>