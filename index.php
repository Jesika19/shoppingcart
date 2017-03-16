<?php 

//Add classes
include 'Cart.php';
include 'Product.php';
include 'Clothing.php';
include 'Food.php';

$cartOne = new Cart();
$productOne = new Product();

/*Food*/
//$foodItemOne = new Food();
$foodItemOne = new Food("F1","Food","Wine","red",12,"12/01/20");

$foodItemTwo = new Food("F2","Food","Juice","red",10,"12/01/20");


echo "Product Ref:"."".$foodItemOne->getProductRef().PHP_EOL;

echo "Product Category:"."".$foodItemOne->getProductCategory().PHP_EOL;

echo "Name:"."".$foodItemOne->getName().PHP_EOL;

echo "Description:"."".$foodItemOne->getDescription().PHP_EOL;

//echo "Quantity:"."".$foodItemOne->getQuantity().PHP_EOL;

echo "Price:$"."".$foodItemOne->getPrice().PHP_EOL;
echo "Expiring Date:"."".$foodItemOne->getExpiringDate().PHP_EOL;


echo "Product Ref:"."".$foodItemTwo->getProductRef().PHP_EOL;

echo "Product Category:"."".$foodItemTwo->getProductCategory().PHP_EOL;

echo "Name:"."".$foodItemTwo->getName().PHP_EOL;

echo "Description:"."".$foodItemTwo->getDescription().PHP_EOL;

//echo "Quantity:"."".$foodItemTwo->getQuantity().PHP_EOL;

echo "Price:$"."".$foodItemTwo->getPrice().PHP_EOL;
echo "Expiring Date:"."".$foodItemTwo->getExpiringDate().PHP_EOL;


$cartOne->addProduct($foodItemOne,0);
$cartOne->updateProduct($foodItemOne,1);
$cartOne->removeProduct($foodItemTwo);
 //echo $cartOne->addProduct($foodItemOne,0);

 //echo $cartOne->removeProduct($foodItemOne);


 //$cartOne->addProduct($foodItemOne,5);
 //var_Dump($cartOne->updateProduct($foodItemOne,6));
//var_Dump($cartOne->addProduct($foodItemOne,2));
//print_R($cartOne->addProduct($foodItemOne,5));
//var_Dump($cartOne->removeProduct($foodItemOne));

echo "Total 1 :$"."".($cartOne->calculateTotal($foodItemOne)).PHP_EOL;
echo "Total 2 :$"."".($cartOne->calculateTotal($foodItemTwo)).PHP_EOL;
/*Subtotal*/
echo "Sub-Total:$".($cartOne->calculateSubTotal($foodItemOne,10)+ $cartOne->calculateSubTotal($foodItemTwo,10)).PHP_EOL;
//echo "Sub-Total:$".($cartOne->calculateSubTotal($foodItemOne)).PHP_EOL;


?>