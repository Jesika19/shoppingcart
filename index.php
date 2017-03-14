<?php 

//Add classes
include 'Cart.php';
include 'Product.php';
include 'Clothing.php';
include 'Food.php';

$cartOne = new Cart();
$productOne = new Product();

/*Food*/
$foodItemOne = new Food("F1","Food","Wine","red",5,12,12/01/20);

$foodItemTwo = new Food("F2","Food","Juice","red",5,6,10,"",12/01/20);


echo "Product Ref:"."".$foodItemOne->getProductRef().PHP_EOL;

echo "Product Category:"."".$foodItemOne->getProductCategory().PHP_EOL;

echo "Name:"."".$foodItemOne->getName().PHP_EOL;

echo "Description:"."".$foodItemOne->getDescription().PHP_EOL;

echo "Quantity:"."".$foodItemOne->getQuantity().PHP_EOL;

echo "Price:$"."".$foodItemOne->getPrice().PHP_EOL;


echo "Product Ref:"."".$foodItemTwo->getProductRef().PHP_EOL;

echo "Product Category:"."".$foodItemTwo->getProductCategory().PHP_EOL;

echo "Name:"."".$foodItemTwo->getName().PHP_EOL;

echo "Description:"."".$foodItemTwo->getDescription().PHP_EOL;

echo "Quantity:"."".$foodItemTwo->getQuantity().PHP_EOL;

echo "Price:$"."".$foodItemTwo->getPrice().PHP_EOL;



//echo $cartOne->addProduct($foodItemOne,5);

//var_Dump($cartOne->addProduct($foodItemOne,5));
//var_Dump($cartOne->addProduct($foodItemOne,2));
//print_R($cartOne->addProduct($foodItemOne,5));
//var_Dump($cartOne->removeProduct($foodItemOne));

echo "Total 1 :$"."".($cartOne->calculateTotal($foodItemOne)).PHP_EOL;
echo "Total 2 :$"."".($cartOne->calculateTotal($foodItemTwo)).PHP_EOL;
/*Subtotal*/
//echo "Sub-Total:$".($cartOne->calculateTotal($foodItemOne)+$cartOne->calculateTotal($foodItemTwo)).PHP_EOL;


?>